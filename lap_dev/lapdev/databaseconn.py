from pymongo import MongoClient

class BaseDB(object):

    @staticmethod
    def init():
        try: 
            client = MongoClient() 
            print("Connected successfully!!!") 
            BaseDB.db = client.lapdb                    # BaseDB.db = client['lapdb'] 'antoher way to create db'
        except:   
            print("Could not connect to MongoDB") 
        
        

    @staticmethod
    def insert(collection,data):
        BaseDB.db[collection].insert(data)

    @staticmethod
    def retrieve(collection,query):
        return BaseDB.db[collection].find_one(query)

    



