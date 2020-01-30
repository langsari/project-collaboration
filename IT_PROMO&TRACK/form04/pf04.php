<link href="vendors/nprogress/nprogress.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="build/css/custom.min.css" rel="stylesheet">
<!-- PAGE LEVEL SCRIPTS -->
<link rel="stylesheet" href="assets/css/bootstrap.css">
<!-- Font Awesome -->
<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<div class="content">

  <div class="row">

    <div class="col-md-12 col-sm-10 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Form Wizards <small>Sessions</small></h2>
          <ul class="nav navbar-right panel_toolbox">

          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">


          <!-- Smart Wizard -->
          <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
          <div id="wizard" class="form_wizard wizard_horizontal">
            <ul class="wizard_steps">
              <li>
                <a href="#step-1">
                  <span class="step_no">1</span>
                  <span class="step_descr">
                    Step 1<br />
                    <small>Step 1 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-2">
                  <span class="step_no">2</span>
                  <span class="step_descr">
                    Step 2<br />
                    <small>Step 2 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">3</span>
                  <span class="step_descr">
                    Step 3<br />
                    <small>Step 3 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-4">
                  <span class="step_no">4</span>
                  <span class="step_descr">
                    Step 4<br />
                    <small>Step 4 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">5</span>
                  <span class="step_descr">
                    Step 5<br />
                    <small>Step 5 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">6</span>
                  <span class="step_descr">
                    Step 6<br />
                    <small>Step 6 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">7</span>
                  <span class="step_descr">
                    Step 7<br />
                    <small>Step 7 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">8</span>
                  <span class="step_descr">
                    Step 8<br />
                    <small>Step 8 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">9</span>
                  <span class="step_descr">
                    Step 9<br />
                    <small>Step 9description</small>
                  </span>
                </a>
              </li>

              <li>
                <a href="#step-3">
                  <span class="step_no">10</span>
                  <span class="step_descr">
                    Step 10<br />
                    <small>Step 10 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">11</span>
                  <span class="step_descr">
                    Step 11<br />
                    <small>Step 11 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">12</span>
                  <span class="step_descr">
                    Step 12<br />
                    <small>Step 12 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">13</span>
                  <span class="step_descr">
                    Step 13<br />
                    <small>Step 13 description</small>
                  </span>
                </a>
              </li>
            </ul>




            <div id="step-1">
              <form class="form-horizontal form-label-left">

                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span
                      class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="first-name" required="required" class="form-control  ">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span
                      class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Middle Name /
                    Initial</label>
                  <div class="col-md-6 col-sm-6 ">
                    <input id="middle-name" class="form-control col" type="text" name="middle-name">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                  <div class="col-md-6 col-sm-6 ">
                    <div id="gender" class="btn-group" data-toggle="buttons">
                      <label class="btn btn-secondary" data-toggle-class="btn-primary"
                        data-toggle-passive-class="btn-secondary">
                        <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;
                      </label>
                      <label class="btn btn-primary" data-toggle-class="btn-primary"
                        data-toggle-passive-class="btn-secondary">
                        <input type="radio" name="gender" value="female" class="join-btn"> Female
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span
                      class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input id="birthday" class="date-picker form-control" required="required" type="text">
                  </div>
                </div>

              </form>

            </div>
            <div id="step-2">
              <h2 class="StepTitle">Step 2 Content</h2>
              <p>
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ulpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              </p>
            </div>
            <div id="step-3">
              <h2 class="StepTitle">Step 3 Content</h2>
              <p>
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim
              </p>
            </div>
            <div id="step-4">
              <h2 class="StepTitle">Step 4 Content</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim
                </p>
            </div>

          </div>
          <!-- End SmartWizard Content -->




        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->

<!-- footer content -->


<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- jQuery Smart Wizard -->
<script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>


</body>

</html>