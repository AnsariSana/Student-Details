import pandas as pd

df = pd.DataFrame()

df = df.append(pd.DataFrame([{'lmlB': 150.0, 'iw': 10.0, 'lmlA': 50.0, 'lmlC': 100.0, 'metric': 'noe'}]))
print(df)

df1 = pd.DataFrame([{'lmlB': 1500.0, 'iw': 10000.0, 'lmlA': 50000.0, 'lmlC': 1000.0, 'metric': 'wages'}])
#df.append(df1,ignore_index = True)

#print(df)
#print(df1)

df = df.append(df1)

print(df)