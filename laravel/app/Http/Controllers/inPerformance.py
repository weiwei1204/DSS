import gurobipy 
import pandas as pd
import sys,json
import numpy as np


lower1 = np.array(json.loads(sys.argv[1]))
lower2 = np.array(json.loads(sys.argv[2]))
lower3 = np.array(json.loads(sys.argv[3]))
upper1 = np.array(json.loads(sys.argv[4]))
upper2 = np.array(json.loads(sys.argv[5]))
upper3 = np.array(json.loads(sys.argv[6]))
middle1 = lower1+((upper1-lower1)/2)
middle2 = lower2+((upper2-lower2)/2)
middle3 = lower3+((upper3-lower3)/2)




# lower1 = np.array([0.4813,0.5250,0.4512,0.4874])
# lower2 = np.array([0.4796,0.4800,0.4814,0.4567])
# lower3 = np.array([0.4826,0.6603,0.4781,0.4832])
# upper1 = np.array([0.86244669,0.943410165,1.02324682,0.97439448])
# upper2 = np.array([0.26495,0.4417399,0.62077398,0.79209])
# upper3 = np.array([0.794565,0.733695,0.72182291,0.72190911])
# middle1 = lower1+((upper1-lower1)/2)
# middle2 = lower2+((upper2-lower2)/2)
# middle3 = lower3+((upper3-lower3)/2)

# Vpc = [0.7212,0.7361,0.7890]
# lower = np.array([0.4813,0.4796,0.4826,0.5250,0.4800,0.6603,0.4512,0.4814,0.4781,0.4874,0.4567,0.4832])
# middle = [0.5520,0.5535,0.5552,0.5944,0.5529,0.7233,0.5295,0.5545,0.5519,0.5579,0.5414,0.5555]
# upper = np.array([0.6228,0.6273,0.6278,0.6638,0.6257,0.7862,0.6078,0.6276,0.6256,0.6284,0.6262,0.6279])
# total = [lower,middle,upper]
# a=lower+((upper-lower)/2)
# print(a)
# print(total[1][0])

dataindex = ['F1','F2','F3','C1','C2','C3','I1','I2','I3','L1','L2','L3']
limit = ['lower','middle','upper']

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
			final.at[k, ('上界')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
			final.at[k, ('中間值')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
			final.at[k, ('下界')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
			
		return final

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

			if self.Limit == 'lower':
			     final.at[k, ('下界')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
			elif self.Limit == 'middle':
			     final.at[k, ('中間值')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
			elif self.Limit == 'upper':
			     final.at[k, ('上界')] = MODEL.objVal if MODEL.status == gurobipy.GRB.Status.OPTIMAL else 'N/A';
		
		return final
    

	def deaexample(self):
		columns_Page = ['效益分析'] * 3 + ['規模報酬分析'] * 2 
		columns_Group = ['技術效益(BCC)', '規模效益(CCR/BCC)', '综合技術效益(CCR)','有效性', '類型'] 
		self.Result = pd.DataFrame(index=self.DMUs, columns=[columns_Page, columns_Group])
		self.__CCR()
# 		self.__BCC()
		self.Result.loc[:, ('效益分析', '規模效益(CCR/BCC)')] = self.Result.loc[:, ('效益分析', '综合技術效益(CCR)')] / self.Result.loc[:,('效益分析', '技術效益(BCC)')]
		return self.Result
    
	def dea(self,limit):
		self.Limit = limit
		self.__BCC()
# 		self.Result.loc[:, ('效益分析', '規模效益(CCR/BCC)')] = self.Result.loc[:, ('效益分析', '综合技術效益(CCR)')] / self.Result.loc[:,('效益分析', '技術效益(BCC)')]
		return final

	def analysis(self, file_name=None):
# 		Result = self.dea()
		file_name = 'inPerformancereport.xlsx' if file_name is None else f'\\{file_name}.xlsx'
		final.to_excel(file_name, 'DEAreport')
        
        
#---------------------DEA計算----------------------        
        
# columns_Page = ['效益分析-技術效益(BCC)'] * 5
columns_Group = ['下界', '中間值', '上界'] 
final = pd.DataFrame(index=dataindex, columns=[columns_Group])
        
# for i in range(4):
#     for j in range(3):
#         data = pd.DataFrame({(dataindex[i*3]):[total[j][i*3],1],
#                           (dataindex[i*3+1]):[total[j][i*3+1],1],
#                           (dataindex[i*3+2]):[total[j][i*3+2],1]
#                             },
#                                 index=['投入' ,'產出']).T
#         X = data[['投入' ]]
#         Y = data[['產出']]
#         dea = DEA(DMUs_Name=data.index, X=X, Y=Y)
#         dea.dea(limit[j])

for i in range(4):
    data = pd.DataFrame({(dataindex[i*3]):[lower1[i],1],
                          (dataindex[i*3+1]):[lower2[i],1],
                          (dataindex[i*3+2]):[lower3[i],1]
                            },index=['投入' ,'產出']).T
    X = data[['投入' ]]
    Y = data[['產出']]
    dea = DEA(DMUs_Name=data.index, X=X, Y=Y)
    dea.dea(limit[0])
    
    data = pd.DataFrame({(dataindex[i*3]):[upper1[i],1],
                          (dataindex[i*3+1]):[upper2[i],1],
                          (dataindex[i*3+2]):[upper3[i],1]
                            },index=['投入' ,'產出']).T
    X = data[['投入' ]]
    Y = data[['產出']]
    dea = DEA(DMUs_Name=data.index, X=X, Y=Y)
    dea.dea(limit[2])
    
    
    data = pd.DataFrame({(dataindex[i*3]):[middle1[i],1],
                          (dataindex[i*3+1]):[middle2[i],1],
                          (dataindex[i*3+2]):[middle3[i],1]
                            },index=['投入' ,'產出']).T
    X = data[['投入' ]]
    Y = data[['產出']]
    dea = DEA(DMUs_Name=data.index, X=X, Y=Y)
    dea.dea(limit[1])

    # dea.analysis()	# dea 分析并输出表格
    # print(dea.dea()) # dea 分析，不输出结果
print(final)
dea.analysis()

