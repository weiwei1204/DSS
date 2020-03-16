import gurobipy 
import pandas as pd
import sys,json
import numpy as np

# finance = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1]
# customer = [2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,1] 
# inprocess = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]
# learn_growth = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1]

finance = json.loads(sys.argv[1])
customer = json.loads(sys.argv[2])
inprocess = json.loads(sys.argv[3])
learn_growth = json.loads(sys.argv[4])
total = [finance,customer,inprocess,learn_growth]
dataindex = ['A01','A02','A03','A04','A05','A06','A07','A08','A09','A10','A11','A12','A13','A14','A15','A16']
BSC = ['finance','customer','inprocess','learn_growth','total']

#-------------------DEA計算----------------------   


# 分页显示数据, 设置为 False 不允许分页
pd.set_option('display.expand_frame_repr', False)

# 最多显示的列数, 设置为 None 显示全部列
pd.set_option('display.max_columns', None)

# 最多显示的行数, 设置为 None 显示全部行
pd.set_option('display.max_rows', None)

class DEA(object):
    
	def __init__(self, DMUs_Name, X, Y, AP=False):
		self.m1, self.m1_name, self.m2, self.m2_name, self.AP = X.shape[1], X.columns.tolist(), Y.shape[1], Y.columns.tolist(), AP
		self.DMUs, self.X, self.Y = gurobipy.multidict({DMU: [X.loc[DMU].tolist(), Y.loc[DMU].tolist()] for DMU in DMUs_Name})
		print(f'DEA(AP={AP}) MODEL RUNING...')

	def __CCR(self):
		for k in self.DMUs:
			MODEL = gurobipy.Model()
			OE, lambdas, s_negitive, s_positive = MODEL.addVar(), MODEL.addVars(self.DMUs),  MODEL.addVars(self.m1), MODEL.addVars(self.m2)
			MODEL.update()
			MODEL.setObjectiveN(OE, index=0, priority=1)
			MODEL.setObjectiveN(-(sum(s_negitive) + sum(s_positive)), index=1, priority=0)
			MODEL.addConstrs(gurobipy.quicksum(lambdas[i] * self.X[i][j] for i in self.DMUs if i != k or not self.AP) + s_negitive[j] == OE * self.X[k][j] for j in range(self.m1))
			MODEL.addConstrs(gurobipy.quicksum(lambdas[i] * self.Y[i][j] for i in self.DMUs if i != k or not self.AP) - s_positive[j] == self.Y[k][j] for j in range(self.m2))
			MODEL.setParam('OutputFlag', 0)
			MODEL.optimize()
			self.Result.at[k, ('效益分析', '综合技術效益(CCR)')] = MODEL.objVal
			self.Result.at[k, ('規模報酬分析', '有效性')] = '非 DEA 有效' if MODEL.objVal < 1 else 'DEA 弱有效' if s_negitive.sum().getValue() + s_positive.sum().getValue() else 'DEA 强有效'
			self.Result.at[k, ('規模報酬分析', '類型')] = '規模報酬固定' if lambdas.sum().getValue() == 1 else '規模報酬遞增' if lambdas.sum().getValue() < 1 else '規模報酬遞減'
# 			for m in range(self.m1):
# 				self.Result.at[k, ('差額變數分析', f'{self.m1_name[m]}')] = s_negitive[m].X
# 				self.Result.at[k, ('投入冗餘率',  f'{self.m1_name[m]}')] = 'N/A' if self.X[k][m] == 0 else s_negitive[m].X / self.X[k][m]
# 			for m in range(self.m2):
# 				self.Result.at[k, ('差額變數分析', f'{self.m2_name[m]}')] = s_positive[m].X
# 				self.Result.at[k, ('產出不足率', f'{self.m2_name[m]}')] = 'N/A' if self.Y[k][m] == 0 else s_positive[m].X / self.Y[k][m]
		return self.Result

	def __BCC(self):
		for k in self.DMUs:
			MODEL = gurobipy.Model()
			TE, lambdas = MODEL.addVar(), MODEL.addVars(self.DMUs)
			MODEL.update()
			MODEL.setObjective(TE, sense=gurobipy.GRB.MINIMIZE)
			MODEL.addConstrs(gurobipy.quicksum(lambdas[i] * self.X[i][j] for i in self.DMUs if i != k or not self.AP) <= TE * self.X[k][j] for j in range(self.m1))
			MODEL.addConstrs(gurobipy.quicksum(lambdas[i] * self.Y[i][j] for i in self.DMUs if i != k or not self.AP) >= self.Y[k][j] for j in range(self.m2))
			MODEL.addConstr(gurobipy.quicksum(lambdas[i] for i in self.DMUs if i != k or not self.AP) == 1)
			MODEL.setParam('OutputFlag', 0)
			MODEL.optimize()
			if self.bsc == 'finance':
			     final.at[k, ('效益分析-技術效益(BBC)', '財務構面')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
			elif self.bsc == 'customer':
			     final.at[k, ('效益分析-技術效益(BBC)', '顧客構面')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
			elif self.bsc == 'inprocess':
			     final.at[k, ('效益分析-技術效益(BBC)', '內部流程構面')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
			elif self.bsc == 'learn_growth':
			     final.at[k, ('效益分析-技術效益(BBC)', '學習成長構面')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
			elif self.bsc == 'total':
			     final.at[k, ('效益分析-技術效益(BBC)', '總效益')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';		
		return final
    

	def deaexample(self):
		columns_Page = ['效益分析'] * 3 + ['規模報酬分析'] * 2 
		columns_Group = ['技術效益(BCC)', '規模效益(CCR/BCC)', '综合技術效益(CCR)','有效性', '類型'] 
		self.Result = pd.DataFrame(index=self.DMUs, columns=[columns_Page, columns_Group])
# 		self.__CCR()
		self.__BCC()
		self.Result.loc[:, ('效益分析', '規模效益(CCR/BCC)')] = self.Result.loc[:, ('效益分析', '综合技術效益(CCR)')] / self.Result.loc[:,('效益分析', '技術效益(BCC)')]
		return self.Result
    
	def dea(self,BSCNAME):
		self.bsc = BSCNAME
		self.__BCC()
# 		self.Result.loc[:, ('效益分析', '規模效益(CCR/BCC)')] = self.Result.loc[:, ('效益分析', '综合技術效益(CCR)')] / self.Result.loc[:,('效益分析', '技術效益(BCC)')]
		return final

	def analysis(self, file_name=None):
# 		Result = self.dea()
		file_name = 'DEAreport.xlsx' if file_name is None else f'\\{file_name}.xlsx'
		final.to_excel(file_name, 'DEAreport')
        
        
#---------------------DEA計算----------------------        
        
columns_Page = ['效益分析-技術效益(BBC)'] * 5
columns_Group = ['財務構面', '顧客構面', '內部流程構面','學習成長構面', '總效益'] 
final = pd.DataFrame(index=dataindex, columns=[columns_Page, columns_Group])
        
count=-1
for i in [finance,customer,inprocess,learn_growth,total]:
    count+=1

    
    if count < 4:
        # total = totalbsc+i #加總各構面的值
        data = pd.DataFrame({('A01'):[i[0],1],('A02'):[i[1],1],('A03'):[i[2],1],('A04'):[i[3],1],('A05'):[i[4],1],
                        ('A06'):[i[5],1],('A07'):[i[6],1],('A08'):[i[7],1],('A09'):[i[8],1],('A10'):[i[9],1],
                        ('A11'):[i[10],1],('A12'):[i[11],1],('A13'):[i[12],1],('A14'):[i[13],1],('A15'):[i[14],1],
                        ('A16'):[i[15],1]},
                            index=['投入' ,'產出']).T
        X = data[['投入' ]]
        Y = data[['產出']]
    else:
       # print(totalbsc)
        data = pd.DataFrame({('A01'):[total[0][0],total[1][0],total[2][0],total[3][0],1,1,1,1],('A02'):[total[0][1],total[1][1],total[2][1],total[3][1],1,1,1,1],
                        ('A03'):[total[0][2],total[1][2],total[2][2],total[3][2],1,1,1,1],('A04'):[total[0][3],total[1][3],total[2][3],total[3][3],1,1,1,1],
                        ('A05'):[total[0][4],total[1][4],total[2][4],total[3][4],1,1,1,1],('A06'):[total[0][5],total[1][5],total[2][5],total[3][5],1,1,1,1],
                        ('A07'):[total[0][6],total[1][6],total[2][6],total[3][6],1,1,1,1],('A08'):[total[0][7],total[1][7],total[2][7],total[3][7],1,1,1,1],
                        ('A09'):[total[0][8],total[1][8],total[2][8],total[3][8],1,1,1,1],('A10'):[total[0][9],total[1][9],total[2][9],total[3][9],1,1,1,1],
                        ('A11'):[total[0][10],total[1][10],total[2][10],total[3][10],1,1,1,1],('A12'):[total[0][11],total[1][11],total[2][11],total[3][11],1,1,1,1],
                        ('A13'):[total[0][12],total[1][12],total[2][12],total[3][12],1,1,1,1],('A14'):[total[0][13],total[1][13],total[2][13],total[3][13],1,1,1,1],
                        ('A15'):[total[0][14],total[1][14],total[2][14],total[3][14],1,1,1,1],('A16'):[total[0][15],total[1][15],total[2][15],total[3][15],1,1,1,1]},
                        index=['財務', '顧客', '內部流程', '學習成長' , '產出1', '產出2', '產出3',  '產出4']).T
        X = data[['財務', '顧客', '內部流程', '學習成長']]
        Y = data[['產出1', '產出2', '產出3',  '產出4']]
        

    dea = DEA(DMUs_Name=data.index, X=X, Y=Y)
    dea.dea(BSC[count])
    # dea.analysis()	# dea 分析并输出表格
 #print(dea.dea('finance')) # dea 分析，不输出结果
    
dea.analysis()

