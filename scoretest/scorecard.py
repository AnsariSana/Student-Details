from pymongo import MongoClient
import pandas as pd
try:
    conn = MongoClient()
except:
    print("Error")


db = conn.scorecard

collection = db.lmlMetricData

data = {}


metrics = collection.find({},{'_id':0})
#print(list(metrics))
df = pd.DataFrame()
#print(df)
#print(list(metrics))
for i in metrics:
    for metric,lmls in i.items():
        #print(metric, end=" ")
        #df['metric'] = metric
        data['metric'] = metric 
        for lml,value in lmls.items():
            #print(lml,value)
            #df[lml] = value
            data[lml] = value
        #print("")
        print(data)
        df = df.append(pd.DataFrame([data]), ignore_index = True)
        #print(df)
        
print(df)


    

    
