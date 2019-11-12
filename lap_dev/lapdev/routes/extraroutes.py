from flask import render_template,flash, redirect,url_for,session,logging,request, escape, Blueprint
from lapdev import app
from lapdev.loggedincheck import login_check
from lapdev.models.userauth import User
from lapdev.databaseconn import BaseDB


extra = Blueprint("extra",__name__)

@extra.route("/show/<email>")
@login_check(session)
def show(email,methods = ["GET", "POST"]):
 	print(email)
 	data = BaseDB.retrieve(collection = "users", query = {"email":email})

 	return render_template("show.html", email = data['email'])


@extra.route("/test")
@login_check(session)
def test():
    print("in test")
    return redirect(url_for("extra.show", email = session['email']))
