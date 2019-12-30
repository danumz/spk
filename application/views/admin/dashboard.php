<script>tinymce.init({selector:'textarea'});</script>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Forms</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Form Basic</li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
                <div class="d-flex m-t-10 justify-content-end">
                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                        <div class="chart-text m-r-10">
                            <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                            <h4 class="m-t-0 text-info">$58,356</h4></div>
                        <div class="spark-chart">
                            <div id="monthchart"></div>
                        </div>
                    </div>
                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                        <div class="chart-text m-r-10">
                            <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                            <h4 class="m-t-0 text-primary">$48,356</h4></div>
                        <div class="spark-chart">
                            <div id="lastmonthchart"></div>
                        </div>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-body wizard-content">
                                  <h4 class="card-title">Data Pribadi</h4>
                                  <h6 class="card-subtitle">You can find the
                                      <a href="http://www.jquery-steps.com/" target="_blank">offical website</a>
                                  </h6>
                                  <form action="#" class="tab-wizard wizard-circle">
                                      <!-- Step 1 -->
                                      <h6>Identitas Diri</h6>
                                      <section>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="firstName1">Nama Lengkap :</label>
                                                      <input type="text" class="form-control" id="firstName1"> </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="lastName1">Alamat :</label>
                                                      <input type="text" class="form-control" id="lastName1"> </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="emailAddress1">Email Address :</label>
                                                      <input type="email" class="form-control" id="emailAddress1"> </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="phoneNumber1">Phone Number :</label>
                                                      <input type="tel" class="form-control" id="phoneNumber1"> </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="location1">Buta Warna :</label>
                                                      <select class="custom-select form-control" id="location1" name="location">
                                                          <option value="">Select City</option>
                                                          <option value="1">Ya</option>
                                                          <option value="2">Tidak</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="location1">Status Perkawinan :</label>
                                                      <select class="custom-select form-control" id="location1" name="location">
                                                          <option value="">Select City</option>
                                                          <option value="1">Belum Menikah</option>
                                                          <option value="2">Menikah</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                      </section>
                                      <!-- Step 2 -->
                                      <h6>Job Status</h6>
                                      <section>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="jobTitle1">Job Title :</label>
                                                      <input type="text" class="form-control" id="jobTitle1"> </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="videoUrl1">Company Name :</label>
                                                      <input type="text" class="form-control" id="videoUrl1">
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <label for="shortDescription1">Job Description :</label>
                                                      <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                                                  </div>
                                              </div>
                                          </div>
                                      </section>
                                      <!-- Step 3 -->
                                      <h6>Interview</h6>
                                      <section>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="int1">Interview For :</label>
                                                      <input type="text" class="form-control" id="int1"> </div>
                                                  <div class="form-group">
                                                      <label for="intType1">Interview Type :</label>
                                                      <select class="custom-select form-control" id="intType1" data-placeholder="Type to search cities" name="intType1">
                                                          <option value="Banquet">Normal</option>
                                                          <option value="Fund Raiser">Difficult</option>
                                                          <option value="Dinner Party">Hard</option>
                                                      </select>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="Location1">Location :</label>
                                                      <select class="custom-select form-control" id="Location1" name="location">
                                                          <option value="">Select City</option>
                                                          <option value="India">India</option>
                                                          <option value="USA">USA</option>
                                                          <option value="Dubai">Dubai</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="jobTitle2">Interview Date :</label>
                                                      <input type="date" class="form-control" id="jobTitle2">
                                                  </div>
                                                  <div class="form-group">
                                                      <label>Requirements :</label>
                                                      <div class="m-b-10">
                                                          <label class="custom-control custom-radio">
                                                              <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                                              <span class="custom-control-label">Employee</span>
                                                          </label>
                                                          <label class="custom-control custom-radio">
                                                              <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                                              <span class="custom-control-label">Membership</span>
                                                          </label>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </section>
                                      <!-- Step 4 -->
                                      <h6>Remark</h6>
                                      <section>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="behName1">Behaviour :</label>
                                                      <input type="text" class="form-control" id="behName1">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="participants1">Confidance</label>
                                                      <input type="text" class="form-control" id="participants1">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="participants1">Result</label>
                                                      <select class="custom-select form-control" id="participants1" name="location">
                                                          <option value="">Select Result</option>
                                                          <option value="Selected">Selected</option>
                                                          <option value="Rejected">Rejected</option>
                                                          <option value="Call Second-time">Call Second-time</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="decisions1">Comments</label>
                                                      <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                  </div>
                                                  <div class="form-group">
                                                      <label>Rate Interviwer :</label>
                                                      <div class="c-inputs-stacked">
                                                          <label class="inline custom-control custom-checkbox block">
                                                              <input type="checkbox" class="custom-control-input">
                                                              <span class="custom-control-label ml-0">1 star</span>
                                                          </label>
                                                          <label class="inline custom-control custom-checkbox block">
                                                              <input type="checkbox" class="custom-control-input">
                                                              <span class="custom-control-label ml-0">2 star</span>
                                                          </label>
                                                          <label class="inline custom-control custom-checkbox block">
                                                              <input type="checkbox" class="custom-control-input">
                                                              <span class="custom-control-label ml-0">3 star</span>
                                                          </label>
                                                          <label class="inline custom-control custom-checkbox block">
                                                              <input type="checkbox" class="custom-control-input">
                                                              <span class="custom-control-label ml-0">4 star</span>
                                                          </label>
                                                          <label class="inline custom-control custom-checkbox block">
                                                              <input type="checkbox" class="custom-control-input">
                                                              <span class="custom-control-label ml-0">5 star</span>
                                                          </label>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </section>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
              var ukuran = $(".ilang").hide()
              var qty = $(".ilang2").hide()
              $("#origSel1").on('change', function() {
                var val = $(this).val()
                if (val == 'Select Warna Product') {
                  $(".ilang").hide()
                }else{
                  $(".ilang").show()
                }
                // fruit.filter("." + val).clone().appendTo("[name=fruit]")
              }).change();
              $("#origSel2").on('change', function() {
                var val2 = $(this).val()
                if (val2 == 'Select Ukuran Product') {
                  $(".ilang2").hide()
                }else{
                  $(".ilang2").show()
                }
                // fruit.filter("." + val).clone().appendTo("[name=fruit]")
              }).change();
          });


</script>
<script type="text/javascript">
var counter= 1;
  function nambahin(){
    counter += 1;
       var packing = $('.samain');
       var clone = packing.clone();
       clone.attr('class', 'col-md-3 samain' + counter);
       clone.appendTo('#yay');
  }
</script>
