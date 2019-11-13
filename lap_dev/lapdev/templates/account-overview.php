<?php include("header.php"); ?>
<!--/navigation : sidebar & header-->
<div class="content-wrapper">
    <div class="container-fluid">

       <div class="row account-statement">
            <div class="col-xl-9 col-md-8">
                <div class="card card-shadow mb-4">
                        <div class="card-header border-0 pb-0">
                                <div class="custom-title-wrap bar-primary">
                                  <div class="custom-title">
                                    Financial Metrics
                                  </div>
                                </div>
                              </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Start Date</label>
                                        <div class="input-group date dpYears" data-date-viewmode="years"
                                            data-date-format="dd-mm-yyyy" data-date="03-10-2018">

                                            <input type="text" class="form-control fs-13" placeholder="03-10-2018"
                                                aria-label="Right Icon" aria-describedby="dp-ig">
                                            <div class="input-group-append">
                                                <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i
                                                        class="fa fa-calendar f14"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pl-0 pl-xs-15">
                                <div class="form-group row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>End Date</label>
                                        <div class="input-group date dpYears" data-date-viewmode="years"
                                            data-date-format="dd-mm-yyyy" data-date="03-10-2018">
                                            <input type="text" class="form-control fs-13" placeholder="03-10-2018"
                                                aria-label="Right Icon" aria-describedby="dp-ig">
                                            <div class="input-group-append">
                                                <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i
                                                        class="fa fa-calendar f14"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pl-0 pl-xs-15">
                                <div class="form-group">
                                        <label>Payment Type</label>
                                        <select class="form-control" id="option_s1" name="param">
                                            <option value="one">Option One</option>
                                            <option value="two">Option Two</option>
                                            <option value="three">Option Three</option>
                                            <option value="four">Option Four</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-2 pl-0 pl-xs-15">
                                <div class="form-group row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="button"
                                            class="btn btn-outline-primary btn-sm fs-13 btn-search">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs nav-fill mb-2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active pt-1 pb-1" data-toggle="tab" href="#today">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-1 pb-1" data-toggle="tab" href="#yesterday">Yesterday</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-1 pb-1" data-toggle="tab" href="#current_week">Current Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-1 pb-1" data-toggle="tab"
                                            href="#current_month">Currrent Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-1 pb-1" data-toggle="tab"
                                            href="#last_week">Last Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-1 pb-1" data-toggle="tab"
                                            href="#last_month">Last Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-1 pb-1" data-toggle="tab"
                                            href="#last_current_month">Last Month & This Month</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane transaction-entries active" id="today" role="tabpanel">
                                        <p>Summary Statement</p>
                                        <ul class="list-unstyled fs-11">
                                            <li class="list-widget-border">Account ID<span
                                                    class="float-right">21674605</span></li>
                                            <li class="list-widget-border">First Name<span
                                                    class="float-right">Bikram</span></li>
                                            <li class="list-widget-border">Last Name<span
                                                    class="float-right">Chaudhury</span></li>
                                        
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="yesterday" role="tabpanel">
                                        Include Bootstrap's source Sass and JavaScript files via npm, Composer or
                                        Meteor. Package managed installs don't include documentation, but do include our
                                        build system and readme.
                                    </div>
                                    <div class="tab-pane" id="current_week" role="tabpanel">
                                        Take Bootstrap 4 to the next level with official premium themes—toolkits built
                                        on Bootstrap with new components and plugins, docs, and build tools.
                                    </div>
                                    <div class="tab-pane" id="current_month" role="tabpanel">
                                        We’ve done our best to prevent breaking changes, but we had to sneak some in.
                                        Regrettably, we’ll also have a few more coming in Beta 3, too. However, we’re
                                        clearly outlining all of them for you to make the upgrade and testing process as
                                        easy as possible.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 pl-0 pl-xs-15">
                <div class="card card-shadow mb-4">
                        <div class="card-header border-0 pb-0">
                                <div class="custom-title-wrap bar-primary">
                                  <div class="custom-title">
                                    Impact Score
                                  </div>
                                </div>
                              </div>
                    <div class="card-body">
                    <div id="impactChart"></div>
                    <div id="legend" class="mt-4"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include("footer.php"); ?>

    <script src="assets/js/account-overview-scripts.js"></script>

    </body>

</html>