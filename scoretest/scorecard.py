from pymongo import MongoClient
import pandas as pd
try:
    conn = MongoClient()
except:
    print("Error")


db = conn.scorecard

collection = db.lmlMetricData

data = {}
lmlpoints = {}

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
            if lml != "iw":
                lmlpoints[lml] = value
        #print("")
        #print(data)
        #print(lmlpoints)
        sortedlmlpoints = sorted(lmlpoints.items(), key=lambda kv: kv[1])
        #print(sortedlmlpoints)
        grade_interval = sortedlmlpoints[-1][1]//5
        #print("Grade Interval:" ,grade_interval)
        no_of_lml = len(sortedlmlpoints)
        if no_of_lml %2 == 0:
            median = (sortedlmlpoints[(no_of_lml//2) - 1 ] + sortedlmlpoints[no_of_lml//2]) // 2 [1]
        else:
            median = sortedlmlpoints[no_of_lml//2][1]

        for lmlname,lmlpoint in lmlpoints.items():

            if 0 < lmlpoint <= grade_interval:
                score = 1
            elif 0 < lmlpoint <= grade_interval*2:
                score = 2
            elif 0 < lmlpoint <= grade_interval*3:
                score = 3
            elif 0 < lmlpoint <= grade_interval*4:
                score = 4
            elif 0 < lmlpoint <= grade_interval*5:
                score = 5
            else:
                score = 1 
            data[lmlname+" Score"] = score

        #print("Median: ", median)
        data['Median'] = median
        data['Grade Interval'] = grade_interval
        
        df = df.append(pd.DataFrame([data]), ignore_index = True)
        #print(df)
        
print(df)


    

    
