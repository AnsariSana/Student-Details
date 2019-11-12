from flask import Flask
from pymongo import MongoClient 
from lapdev.databaseconn import BaseDB
import datetime
import os
app = Flask(__name__)
app.config['SECRET_KEY'] = os.environ.get('SECRET_KEY')
print(app.secret_key) 
app.config['PERMANENT_SESSION_LIFETIME'] =  datetime.timedelta(minutes=1)
#app.permanent_session_lifetime = datetime.timedelta(minutes = 1)
BaseDB.init()
#from lapdev.user import routes
#from lapdev.extra import routes
#from lapdev import routes #imported at the end to prevent circular import bcoz app var is used in routes file

from lapdev.routes.authroutes import user
from lapdev.routes.extraroutes import extra

app.register_blueprint(user)
app.register_blueprint(extra)

