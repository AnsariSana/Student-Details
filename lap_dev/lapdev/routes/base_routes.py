from flask import Blueprint, render_template


base_route = Blueprint("baseroute", __name__)    #base_route will be used with @ and baseroute(name of blueprint will be with urlfor function)

@base_route.route("/")
def index():
    return render_template("index.html")


@base_route.route("/approach")
def approach():
    return render_template("approach.html")


@base_route.route("/financial-inclusion")
def financial_inclusion():
    return render_template("financial-inclusion.html")


@base_route.route("/climate-action")
def climate_action():
    return render_template("climate-action.html")



@base_route.route("/how-it-works")
def how_it_works():
    return render_template("how-it-works.html")


@base_route.route("/getting-started")
def getting_started():
    return render_template("getting-started.html")


@base_route.route("/team")
def team():
    return render_template("team.html")


@base_route.route("/news")
def news():
    return render_template("news.html")


@base_route.route("/contact")
def contact():
    return render_template("contact.html")