import functools
from flask import redirect,url_for,flash
def login_check(session):
    def login_check_runfunc(func):
        @functools.wraps(func)
        def login_check_func(*args,**kwargs):
            print(session)
            if 'email' in session:
                    return func(*args,**kwargs)
            else:
                    return redirect(url_for("user.login"))
           
        return login_check_func
    return login_check_runfunc




