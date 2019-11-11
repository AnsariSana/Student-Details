from flask import render_template,flash, redirect,url_for,session,logging,request, escape
from lapdev import app, collection
from lapdev.loggedincheck import login_check
from passlib.hash import sha256_crypt

@app.route("/")
def index():
    return render_template("index.php")



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
@login_check(session)
def show(email,methods = ["GET", "POST"]):
 	print(email)
 	data = collection.find_one({"email" : email})

 	return render_template("show.html", email = data['email'])
@app.route("/logout")
@login_check(session)
def logout():
    session.pop('email',None)
    return redirect(url_for("login"))


@app.route("/test")
@login_check(session)
def test():
    print("in test")
    return redirect(url_for("show", email = session['email']))
