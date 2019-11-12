from flask import render_template,flash, redirect,url_for,session,logging,request, escape, Blueprint
from lapdev import app
from lapdev.loggedincheck import login_check
from passlib.hash import sha256_crypt
from lapdev.models.userauth import User

user = Blueprint("user", __name__)                 #1st parameter blueprint name and 2nd: name of the package where blueprint located

@user.route("/")
def index():
    return render_template("index.php")



@user.route("/login",methods=["GET", "POST"])
def login():
    if 'email' in session:
        return redirect(url_for("show", email = session['email']))
    if request.method == "POST":
        email = request.form["uname"]
        password = request.form["passw"]

        new_user = User(email,password)
        user_credentials = new_user.login()

        #user_credentials = collection.find_one({'email' : email})
        if user_credentials and sha256_crypt.verify(password,user_credentials['password']):
            
            session.permanent = True
            session['email'] = email
            return redirect(url_for("extra.show", email = session['email']))
        else:
        	#flash("enter correct credentials")
        	return redirect(url_for("user.login"))

    return render_template("login.html")


@user.route("/logout")
@login_check(session)
def logout():
    session.pop('email',None)
    return redirect(url_for("user.login"))

@user.route("/testshow")
def show():
    return "In user/routes/show"