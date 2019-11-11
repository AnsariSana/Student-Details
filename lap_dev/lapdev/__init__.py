from flask import Flask
from pymongo import MongoClient 
import datetime

app = Flask(__name__)
app.secret_key = "abc"
app.config['PERMANENT_SESSION_LIFETIME'] =  datetime.timedelta(minutes=1)
#app.permanent_session_lifetime = datetime.timedelta(minutes = 1)
try: 
    conn = MongoClient() 
    print("Connected successfully!!!") 
except:   
    print("Could not connect to MongoDB") 
    
db = conn.database
collection = db.student

from lapdev import routes #imported at the end to prevent circular import bcoz app var is used in routes file
