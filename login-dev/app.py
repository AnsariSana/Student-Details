from flask import Flask, render_template,flash, redirect,url_for,session,logging,request, escape
from pymongo import MongoClient 
import datetime, socket, requests, json
from passlib.hash import sha256_crypt


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


@app.route("/")
def index():
    return render_template("index.html")



@app.route("/login",methods=["GET", "POST"])
def login():
    if 'email' in session:
        return redirect(url_for("show", email = session['email']))
    if request.method == "POST":
        email = request.form["uname"]
        password = request.form["passw"]
        user_credentials = collection.find_one({'email' : email})
        if user_credentials and sha256_crypt.verify(password,user_credentials['password']):
            
            session.permanent = True
            session['email'] = email
            return redirect(url_for("show", email = session['email']))
        else:
        	#flash("enter correct credentials")
        	return redirect(url_for("login"))

    return render_template("login.html")

@app.route("/register", methods=["GET", "POST"])
def register():
    if request.method == "POST":
        email = request.form['mail']
        password = sha256_crypt.encrypt(request.form['passw'])
        rec_id1 = collection.insert({
        	'email' : email,
        	'password' : password,
        	}) 
        print("Data inserted with record ids",rec_id1) 
        session['email'] = email
        
        return redirect(url_for("login"))
    return render_template("register.html")

@app.route("/show/<email>")
def show(email,methods = ["GET", "POST"]):
 	print(email)
 	data = collection.find_one({"email" : email})

 	return render_template("show.html", email = data['email'])
@app.route("/logout")
def logout():
    if 'email' in session:
        print(session['email'])
        session.pop('email',None)
    return redirect(url_for("login"))


@app.route("/test")
def test():
    print("in test")
    if 'email' in session:
        return redirect(url_for("index"))
    return redirect(url_for("login"))



if __name__ == '__main__':
    app.run(debug = True)