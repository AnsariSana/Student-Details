from lapdev.databaseconn import BaseDB
from passlib.hash import sha256_crypt

class User(object):

    def __init__(self,email,password):

        self.email = email
        self.password = sha256_crypt.encrypt(password)

    def login(self):

        if not BaseDB.retrieve("users",{"email": self.email}):
            BaseDB.insert(collection = "users", data = self.userData())
            
        return BaseDB.retrieve(collection = "users", query = {"email": self.email})

        


    def userData(self):

        return {"email":self.email,
                "password": self.password
        }
