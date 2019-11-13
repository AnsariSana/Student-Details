<?php include("header.php"); ?>
<!--/navigation : sidebar & header-->
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="row">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0 pb-0">
                        <div class="custom-title-wrap bar-primary">
                          <div class="custom-title">
                              Interest rate p. m.
                          </div>
                        </div>
                      </div>
                  <div class="card-body">
                    <input id="interest_rate_pm-range-slider" type="text" class="js-range-slider"
                      name="interest_rate_pm-range-slider" value="" />
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0 pb-0">
                        <div class="custom-title-wrap bar-primary">
                          <div class="custom-title">
                              Term
                          </div>
                        </div>
                      </div>
                  <div class="card-body">
                    <input id="term-range-slider" type="text" class="js-range-slider" name="term-range-slider"
                      value="" />
                  </div>
                </div>
              </div>
              <div class="col-md-4">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0 pb-0">
                    <div class="custom-title-wrap bar-primary">
                      <div class="custom-title">
                          Impact Score
                      </div>
                    </div>
                  </div>
              <div class="card-body">
                <input id="impact_score-range-slider" type="text" class="js-range-slider"
                  name="impact_score-range-slider" value="" />
              </div>
            </div>
          </div>
              <div class="col-md-12">
                  <div class="card card-shadow mb-4">
                      <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                          <div class="custom-title">Available loans</div>
                        </div>
                      </div>
                      <div class="card-body pb-4">
                        <div class="custom-scrollbar table-responsive loans-table">
                        <table id="loan_table" class="table table-striped"
                                        style="border-bottom:1px solid #e5e8eb;">
                            <thead>
                              <tr>
                                <th>Lender</th>
                                <th>Loan ID</th>
                                <th>Loan amount</th>
                                <th>Currency</th>
                                <th>Contract date</th>
                                <th>Loan type</th>
                                <th>Interest rate p. m.</th>
                                <th>Status</th>
                                <th>Available for investment</th>
                                <th>
                                  Invest
                                  <label class="switch size-xs mb-0 d-block">
                                    <input type="checkbox" id="invest-all-switch">
                                    <span class="slider round success"></span>
                                  </label>
                                </th>
                              </tr>
                            </thead>
        
                            <tbody>
        
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8166</td>
                                <td>10000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>2.66</td>
                                <td>Current</td>
                                <td>10000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>6677</td>
                                <td>10000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.8</td>
                                <td>Current</td>
                                <td>10000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>7822</td>
                                <td>10000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.1</td>
                                <td>Current</td>
                                <td>10000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8033</td>
                                <td>4000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.4</td>
                                <td>Current</td>
                                <td>4000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>9393</td>
                                <td>15000</td>
                                <td>Rupiah (IDR)</td>
                                <td>01-Jul-2019</td>
                                <td>SME</td>
                                <td>0.6</td>
                                <td>Current</td>
                                <td>15000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>7972</td>
                                <td>2900</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.2</td>
                                <td>Current</td>
                                <td>2900</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8782</td>
                                <td>2000</td>
                                <td>Rupiah (IDR)</td>
                                <td>27-Mar-2019</td>
                                <td>SME</td>
                                <td>0.6</td>
                                <td>Current</td>
                                <td>2000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8781</td>
                                <td>1000</td>
                                <td>Rupiah (IDR)</td>
                                <td>27-Mar-2019</td>
                                <td>SME</td>
                                <td>0.5</td>
                                <td>Current</td>
                                <td>1000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8736</td>
                                <td>12000</td>
                                <td>Rupiah (IDR)</td>
                                <td>23-Feb-2019</td>
                                <td>SME</td>
                                <td>1.5</td>
                                <td>Current</td>
                                <td>12000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>6965</td>
                                <td>20000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.5</td>
                                <td>Current</td>
                                <td>20000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>

                              <tr>
                                <td>Akulaku</td>
                                <td>6677</td>
                                <td>10000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.8</td>
                                <td>Current</td>
                                <td>10000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>7822</td>
                                <td>10000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.1</td>
                                <td>Current</td>
                                <td>10000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8033</td>
                                <td>4000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.4</td>
                                <td>Current</td>
                                <td>4000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>9393</td>
                                <td>15000</td>
                                <td>Rupiah (IDR)</td>
                                <td>01-Jul-2019</td>
                                <td>SME</td>
                                <td>0.6</td>
                                <td>Current</td>
                                <td>15000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>7972</td>
                                <td>2900</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.2</td>
                                <td>Current</td>
                                <td>2900</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8782</td>
                                <td>2000</td>
                                <td>Rupiah (IDR)</td>
                                <td>27-Mar-2019</td>
                                <td>SME</td>
                                <td>0.6</td>
                                <td>Current</td>
                                <td>2000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8781</td>
                                <td>1000</td>
                                <td>Rupiah (IDR)</td>
                                <td>27-Mar-2019</td>
                                <td>SME</td>
                                <td>0.5</td>
                                <td>Current</td>
                                <td>1000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8736</td>
                                <td>12000</td>
                                <td>Rupiah (IDR)</td>
                                <td>23-Feb-2019</td>
                                <td>SME</td>
                                <td>1.5</td>
                                <td>Current</td>
                                <td>12000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>6965</td>
                                <td>20000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.5</td>
                                <td>Current</td>
                                <td>20000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>

                              <tr>
                                <td>Akulaku</td>
                                <td>6677</td>
                                <td>10000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.8</td>
                                <td>Current</td>
                                <td>10000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>7822</td>
                                <td>10000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.1</td>
                                <td>Current</td>
                                <td>10000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8033</td>
                                <td>4000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.4</td>
                                <td>Current</td>
                                <td>4000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>9393</td>
                                <td>15000</td>
                                <td>Rupiah (IDR)</td>
                                <td>01-Jul-2019</td>
                                <td>SME</td>
                                <td>0.6</td>
                                <td>Current</td>
                                <td>15000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>7972</td>
                                <td>2900</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.2</td>
                                <td>Current</td>
                                <td>2900</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8782</td>
                                <td>2000</td>
                                <td>Rupiah (IDR)</td>
                                <td>27-Mar-2019</td>
                                <td>SME</td>
                                <td>0.6</td>
                                <td>Current</td>
                                <td>2000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8781</td>
                                <td>1000</td>
                                <td>Rupiah (IDR)</td>
                                <td>27-Mar-2019</td>
                                <td>SME</td>
                                <td>0.5</td>
                                <td>Current</td>
                                <td>1000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8736</td>
                                <td>12000</td>
                                <td>Rupiah (IDR)</td>
                                <td>23-Feb-2019</td>
                                <td>SME</td>
                                <td>1.5</td>
                                <td>Current</td>
                                <td>12000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>6965</td>
                                <td>20000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.5</td>
                                <td>Current</td>
                                <td>20000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>

                              <tr>
                                <td>Akulaku</td>
                                <td>6677</td>
                                <td>10000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.8</td>
                                <td>Current</td>
                                <td>10000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>7822</td>
                                <td>10000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.1</td>
                                <td>Current</td>
                                <td>10000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8033</td>
                                <td>4000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.4</td>
                                <td>Current</td>
                                <td>4000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>9393</td>
                                <td>15000</td>
                                <td>Rupiah (IDR)</td>
                                <td>01-Jul-2019</td>
                                <td>SME</td>
                                <td>0.6</td>
                                <td>Current</td>
                                <td>15000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>7972</td>
                                <td>2900</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.2</td>
                                <td>Current</td>
                                <td>2900</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8782</td>
                                <td>2000</td>
                                <td>Rupiah (IDR)</td>
                                <td>27-Mar-2019</td>
                                <td>SME</td>
                                <td>0.6</td>
                                <td>Current</td>
                                <td>2000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8781</td>
                                <td>1000</td>
                                <td>Rupiah (IDR)</td>
                                <td>27-Mar-2019</td>
                                <td>SME</td>
                                <td>0.5</td>
                                <td>Current</td>
                                <td>1000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>8736</td>
                                <td>12000</td>
                                <td>Rupiah (IDR)</td>
                                <td>23-Feb-2019</td>
                                <td>SME</td>
                                <td>1.5</td>
                                <td>Current</td>
                                <td>12000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
                              <tr>
                                <td>Akulaku</td>
                                <td>6965</td>
                                <td>20000</td>
                                <td>Rupiah (IDR)</td>
                                <td>02-Feb-2019</td>
                                <td>SME</td>
                                <td>1.5</td>
                                <td>Current</td>
                                <td>20000</td>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-xs invest-button">
                                    Invest
                                  </button>
                                </td>
                              </tr>
        
        
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
              <div class="p-sticky-temp">
                <!--  class="p-sticky-temp" style="top:96px;" -->
                <div class="card card-shadow mb-4">
                  <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">
                      <div class="custom-title">Advance Filters</div>
                    </div>
                  </div>
                  <div class="card-body custom-scrollbar filter-container">
                    <dl class="toggle">
                      <dt>
                        <a href="">UN SDG's</a>
                      </dt>
                      <dd class="custom-scrollbar">
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_1"></label>
                          <label class="control-label">No poverty</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_2"></label>
                          <label class="control-label">Zero hunger</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_3"></label>
                          <label class="control-label">Good health</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_4"></label>
                          <label class="control-label">Quality education</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_5"></label>
                          <label class="control-label">Gender equality</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_6"></label>
                          <label class="control-label">Clean water and sanitation</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_7"></label>
                          <label class="control-label">Affordable and clean energy</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_8"></label>
                          <label class="control-label">Decent work and economic growth</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_9"></label>
                          <label class="control-label">Industry, Innovation, and Infrastructure</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_10"></label>
                          <label class="control-label">Reducing inequalities</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_11"></label>
                          <label class="control-label">Sustainable cities and communities</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_12"></label>
                          <label class="control-label">Responsible consumption and production</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_13"></label>
                          <label class="control-label">Climate action</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_14"></label>
                          <label class="control-label">Life below water</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_15"></label>
                          <label class="control-label">Life on land</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_16"></label>
                          <label class="control-label">Peace, justice and strong institutions</label>
                        </div>
  
                        <div>
                          <label class="mb-0"><input type="checkbox" checked class="iCheck-flat-orange"
                              name="sdg_17"></label>
                          <label class="control-label">Partnerships for the goals</label>
                        </div>
                      </dd>
                      <dt>
                        <a href="">Currency</a>
                      </dt>
                      <dd class="custom-scrollbar">
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="THB"></label>
                          <label class="control-label">Baht (THB)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="VND"></label>
                          <label class="control-label">Dong (VND)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="INR"></label>
                          <label class="control-label">Indian Rupee (INR)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="KHR"></label>
                          <label class="control-label">Riel (KHR)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="MMK"></label>
                          <label class="control-label">Kyat (MMK)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="MYR"></label>
                          <label class="control-label">Malaysian Ringgit (MYR)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="NPR"></label>
                          <label class="control-label">Nepalese Rupee (NPR)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="PKR"></label>
                          <label class="control-label">Pakistan Rupee (PKR)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="PHP"></label>
                          <label class="control-label">Philippine Peso (PHP)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="IDR"></label>
                          <label class="control-label">Rupiah (IDR)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="SGD"></label>
                          <label class="control-label">Singapore Dollar (SGD)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="LKR"></label>
                          <label class="control-label">Sri Lanka Rupee (LKR)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="BDT"></label>
                          <label class="control-label">Taka (BDT)</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-green" name="CNY"></label>
                          <label class="control-label">Yuan Renminbi (CNY)</label>
                        </div>
                      </dd>
                      <dt>
                        <a href="">Lender</a>
                      </dt>
                      <dd class="custom-scrollbar">
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-purple"
                              name="5d436e0f35b4fcb1aaaf999d"></label>
                          <label class="control-label">Akulaku</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-purple"
                              name="5d8315719240973182be04ed"></label>
                          <label class="control-label">Crowdo</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-purple"
                              name="5d8315db9240973182be04ee"></label>
                          <label class="control-label">Validus</label>
                        </div>
                      </dd>
                      <dt><a href="">Loan Type</a></dt>
                      <dd class="custom-scrollbar">
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-red" name="education"></label>
                          <label class="control-label">Education</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-red" name="personal"></label>
                          <label class="control-label">Personal</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-red" name="sme"></label>
                          <label class="control-label">SME</label>
                        </div>
                      </dd>
                      <dt><a href="">Country</a></dt>
                      <dd class="custom-scrollbar">
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="BD"></label>
                          <label class="control-label">Bangladesh</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="CN"></label>
                          <label class="control-label">China</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="ID"></label>
                          <label class="control-label">Indonesia</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="IN"></label>
                          <label class="control-label">India</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="KH"></label>
                          <label class="control-label">Cambodia</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="LK"></label>
                          <label class="control-label">Sri Lanka</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="MV"></label>
                          <label class="control-label">Maldives</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="MM"></label>
                          <label class="control-label">Myanmar</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="MY"></label>
                          <label class="control-label">Malaysia</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="NP"></label>
                          <label class="control-label">Nepal</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="PK"></label>
                          <label class="control-label">Pakistan</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="PH"></label>
                          <label class="control-label">Philippines</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="SG"></label>
                          <label class="control-label">Singapore</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="TH"></label>
                          <label class="control-label">Thailand</label>
                        </div>
                        <div>
                          <label><input type="checkbox" checked class="iCheck-flat-blue" name="VN"></label>
                          <label class="control-label">Viet Nam</label>
                        </div>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

  </div>
  <?php include("footer.php"); ?>

  <script src="assets/js/loan-marketplace-scripts.js"></script>

    </body>

</html>