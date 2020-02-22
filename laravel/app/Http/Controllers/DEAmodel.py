#! python3
#!/usr/bin/python3
#coding=utf-8

import gurobipy


E={}  
I=1
O=1
#X、Y為各DMU的投入與產出    
#DMU,X,Y=multidict({('A'):[[11,14],[2,2,1]],('B'):[[7,7],[1,1,1]],('C'):[[11,14],[1,1,2]],('D'):[[14,14],[2,3,1]],('E'):[[14,15],[3,2,3]]})
DMU,X,Y=gurobipy.multidict({('A01'):[[5.5147],[1]],('A02'):[[3.1985],[1]],('A03'):[[2.8676],[1]],('A04'):[[2.1985],[1]],('A05'):[[2.1507],[1]],
                   ('A06'):[[2.1507],[1]],('A07'):[[2.7022],[1]],('A08'):[[3.3640],[1]],('A09'):[[3.9522],[1]],('A10'):[[1.4706],[1]],
                   ('A11'):[[1.7463],[1]],('A12'):[[5.1471],[1]],('A13'):[[1.3235],[1]],('A14'):[[1.6176],[1]],('A15'):[[9.2647],[1]],
                   ('A16'):[[0.5882],[1]]})

for r in DMU:            
        
    m=gurobipy.Model("VRS_model")
    
    v,u,u0={},{},{}
    for i in range(I):
        v[r,i]=m.addVar(vtype=gurobipy.GRB.CONTINUOUS,name="v_%s%d"%(r,i))
    
    for j in range(O):
        u[r,j]=m.addVar(vtype=gurobipy.GRB.CONTINUOUS,name="u_%s%d"%(r,j))

    u0[r]=m.addVar(lb=-1000,vtype=gurobipy.GRB.CONTINUOUS,name="u_0%s"%r)
    
    m.update()
    
    
    m.setObjective(gurobipy.quicksum(u[r,j]*Y[r][j] for j in range(O))-u0[r],gurobipy.GRB.MAXIMIZE)
    
    m.addConstr(gurobipy.quicksum(v[r,i]*X[r][i] for i in range(I))==1)
    for k in DMU:
        m.addConstr(gurobipy.quicksum(u[r,j]*Y[k][j] for j in range(O))-gurobipy.quicksum(v[r,i]*X[k][i] for i in range(I))-u0[r] <=0)
    
    m.optimize()
    
    E[r]="The efficiency of DMU %s:%0.3f and  %s= %0.3f"%(r,m.objVal,u0[r].varName,u0[r].X)


for r in DMU:
    print (E[r])