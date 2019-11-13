{% include "header.html" %}
{% block content %}
<div class="content-wrapper my-account">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 col-md-6">
        <div class="card card-shadow mb-4 ">
          <div class="card-body">
            <div class="text-center">
              <div class="mt-4 mb-3">
                <img class="rounded-circle" src="https://www.greenarccapital.com/assets/uploads/Bikram.png" width="85"
                  alt="">
              </div>
              <h5 class="text-uppercase mb-0">Bikram Chaudhury</h5>
              <p class="text-muted mb-0">Conscientious Fund Pte. Ltd.</p>

            </div>

          </div>
        </div>
      </div>
      <div class="col-xl-8 col-md-6">
        <div class="card card-shadow mb-4 ">
          <div class="card-body">
            <ul class="nav nav-tabs nav-fill" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#personal-info">Personal
                  Information</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#security">Security</a>
              </li>
            </ul>

            <div class="tab-content my-account-tabs px-4 pt-4">
              <div class="tab-pane active" id="personal-info" role="tabpanel">
                <ul class="list-unstyled fs-13">
                  <li class="list-widget-border mb-3 pb-3">Account ID<span class="float-right">21674605</span></li>
                  <li class="list-widget-border mb-3 pb-3">First Name<span class="float-right">Bikram</span></li>
                  <li class="list-widget-border mb-3 pb-3">Last Name<span class="float-right">Chaudhury</span></li>
                  <li class="list-widget-border mb-3 pb-3">Address<span class="float-right">Singapore
                      <i class="fa fa-edit fa-lg edit-icon" aria-hidden="true"></i></span></li>
                  <li class="list-widget-border mb-3 pb-3">Country of Residence<span class="float-right">Singapore <i
                        class="fa fa-edit fa-lg edit-icon" aria-hidden="true"></i></span></li>
                  <li class="list-widget-border mb-3 pb-3">Phone<span class="float-right">5454545 <i
                        class="fa fa-edit fa-lg edit-icon" aria-hidden="true"></i></span></li>
                  <li class="list-widget-border mb-3 pb-3">Email<span
                      class="float-right">bikramchaoudhury@gmail.com</span></li>
                  <li class="list-widget-border mb-3 pb-3 b-b0">Language<span class="float-right">English <i
                        class="fa fa-edit fa-lg edit-icon" aria-hidden="true"></i></span></li>
                </ul>
              </div>
              <div class="tab-pane" id="security" role="tabpanel">
                <form class="mt-4" action="#">
                  <div>
                      <label>Current Password</label>
                      <input type="password" class="form-control" id="password">
                  </div>

                  <div class="mt-3">
                      <label>Type New Password</label>
                      <input type="password" class="form-control" id="new_password">
                  </div>

                  <div class="mt-3">
                      <label>Re-type New Password</label>
                      <input type="password" class="form-control" id="retype_password">
                  </div>

                  <div class="form-group clearfix my-4 text-right">
                    <button type="submit" class="btn btn-sm btn-primary fs-13">Submit</button>
                  </div>
                </form>
              </div>
              <!-- <div class="tab-pane" id="currencies" role="tabpanel">
                                <p>Currencies</p>
                            </div>
                            <div class="tab-pane" id="notifications" role="tabpanel">
                                <p>Notifications</p>
                            </div>
                            <div class="tab-pane" id="agreements" role="tabpanel">
                                <p>Agreements</p>
                            </div>
                            <div class="tab-pane" id="tax-report" role="tabpanel">
                                    <p>Tax Report</p>
                                </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  {% endblock %}
{% include "footer.html" %}
  </body>

</html>