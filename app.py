from flask import Flask, render_template,flash, redirect,url_for,session,logging,request, escape
from pymongo import MongoClient 
import datetime
from passlib.hash import sha256_crypt

app = Flask(__name__)
app.secret_key = "abc"
app.config['PERMANENT_SESSION_LIFETIME'] =  datetime.timedelta(minutes=30)
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
        uname = request.form["uname"]
        passw = request.form["passw"]
        #print(uname)
        ename = collection.find_one({'email' : uname})
        #print(ename)
        if ename and sha256_crypt.verify(passw,ename['password']):
            if 'email' in session:
                #return "Logged in as %s" %escape(session['email'])
                print(session['email'])
                session.permanent = True
                return redirect(url_for("show", email = session['email']))
            else:
        	    session['email'] = uname
        	    return redirect(url_for("show", email = session['email']))
        else:
        	#flash("enter correct credentials")
        	return redirect(url_for("login"))

    return render_template("login.html")

@app.route("/register", methods=["GET", "POST"])
def register():
    if request.method == "POST":
        name = request.form['name']
        rollno = request.form['rollno']
        mail = request.form['mail']
        passw = sha256_crypt.encrypt(request.form['passw'])
        std = request.form['std']
        rec_id1 = collection.insert({'name' : name,
        	'rollno' : rollno,
        	'email' : mail,
        	'password' : passw,
        	'std' : std,
        	'grades':[]}) 
        print("Data inserted with record ids",rec_id1) 
        return redirect(url_for("getgrades",std = std,mail = mail))
    return render_template("register.html")

@app.route("/show/<email>")
def show(email,methods = ["GET", "POST"]):
 	print(email)
 	data = collection.find_one({"email" : email})

 	return render_template("show.html", name = data['name'],rollno = data['rollno'], email = data['email'], grades = data['grades'], length = len(data['grades']))


@app.route("/getgrades/<int:std>/<mail>",methods=["GET", "POST"])
def getgrades(std,mail):
	print(std)
	if request.method == "POST":
		for i in range(1,std):
			stnd = request.form['std'+str(i)]
			
			grade = request.form['grade'+str(i)]
			remark = request.form['remark'+str(i)]
			percentage = request.form['percentage'+str(i)]
			print(stnd,grade,remark,percentage)
			response = collection.update({"email" : mail}, {"$push" : {"grades" : {"stnd" :stnd,"grade":grade,"remark":remark,"percentage":percentage}}})
			#response = rec.grades = {"stnd" :stnd,"grade":grade,"remark":remark,"percentage":percentage}
			print(response)
		return redirect(url_for("login"))
 

	return render_template("grades.html",std = std)


@app.route("/logout")
def logout():
    if 'email' in session:
        print(session['email'])
        session.pop('email',None)
        return redirect(url_for("login"))
    return redirect(url_for("login"))





if __name__ == '__main__':
    app.run(debug = True)