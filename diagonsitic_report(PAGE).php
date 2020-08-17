<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Clinic Name</title>
  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/diagonistic-template.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/modals.css">
  <link rel="stylesheet" href="styles/diagnostic-report.css">
  <!-- for fonts -->
  <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
  <script src="https://kit.fontawesome.com/d814c57d3c.js" crossorigin="anonymous"></script>

</head>

<body onresize="resizeDiv()" onload="resizeDiv()" class="table-wrapper-scroll-y">
  <div class="container" id="container">
    <div class="header">
      <img class="logo" src="src/img/heading.png" alt="ClinicCareLogo" />

      <div class="date-time">
        <p id="date"></p>
        <p id="time"></p>
      </div>

      <div class="search-bar">
        <div class="dropdown-box">
          <input type="text" name="search" autocomplete="off" />
          <a href="#" class="searching-button"><img class="nav-icon" src="src/img/magnify-glass.svg" alt="" /></a>

          <div class="searchbar-dropdown">
            <input type="radio" id="search-by-id" name="src" />
            <label for="search-by-id">Search by ID</label>
            <br />
            <br />
            <input type="radio" id="search-by-name" name="src" />
            <label for="search-by-name">Search by Name</label>
          </div>
        </div>
      </div>

      <div class="nav-images">
        <div class="dropdown-user1">
          <a href="#" class="nav-logos"><img src="src/img/settings.png" alt="" /></a>
          <div class="dropdown-content3">
            <a href="settings(PAGE).php">Settings</a>
            <a href="report_bug.php">Report Bug</a>
          </div>
        </div>

        <div class="dropdown-notification">
          <a href="#" class="nav-logos"><img src="src/img/notification.png" alt="" /></a>
          <div class="dropdown-content">
            <a href="#">You have missed an appointment</a>
            <a href="#">Clear all notification</a>
          </div>
        </div>

        <div class="dropdown-user">
          <a href="# " class="nav-logos"><img src="src/img/user.png " alt=" " /></a>
          <div class="dropdown-content2">
            <a href="my-profile(PAGE).php">My Profile</a>
            <a href="#">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <div class="sidebar" id="sidebar">
      <div class="toggle-btn" id="toggler" onclick="toggleSidebar()">
        <a href="" onclick=" return false">
          <img src="src/img/resize.svg" alt="">
        </a>
      </div>
      <a href="dashboard(PAGE).php"><img src="src/img/home.png" />
        <div class="small_sidebar">Dashboard</div>
      </a>
      <a href="patients(PAGE).php"><img src="src/img/patient.svg" />
        <div class="small_sidebar">Patients</div>
      </a>
      <a href="appointment.php"><img src="src/img/appointment-icon.svg" alt="" />
        <div class="small_sidebar">Appointments</div>
      </a>
      <a href="diagnostic(PAGE).php" class="nav-active"><img src="src/img/diagnostic.svg" alt="" />
        <div class="small_sidebar"> Diagnostic Report</div>
      </a>
      <a href="billing(PAGE).php"><img src="src/img/finance.svg" alt="" />
        <div class="small_sidebar">Billing</div>
      </a>
      <a href="expenses(PAGE).php"><img src="src/img/prescription.svg" alt="" />
        <div class="small_sidebar">Expenses</div>
      </a>
      <a href="inventory (PAGE).php"><img src="src/img/inventory.svg" alt="" />
        <div class="small_sidebar">Inventory</div>
      </a>
      <a href="medical-cert(PAGE).php"><img src="src/img/mc.svg" alt="" />
        <div class="small_sidebar">Medical Certificate</div>
      </a>
      <a href="financial-report(PAGE).php"><img src="src/img/cash.svg" alt="" />
        <div class="small_sidebar">Finance Reports</div>
      </a>
      <a href="backup.php"><img src="src/img/settings-tools.svg" alt="" />
        <div class="small_sidebar">Backup & Table Setup</div>
      </a>
    </div>
    <div class="main">
      <div class="head">
        <h1>DIAGNOSTIC REPORT</h1>
      </div>

      <div class="main-body" id="ad-width">
        <div id="code">
          R004
        </div>
        <div class="cl-btn" onclick="show('modal3')">
          <i class="fas fa-times-circle"></i>
        </div>
        <div id="sliderdiv" class="table-wrapper-scroll-y">
          <div style="display: flex;min-width: 1035px;max-width: 1035px;">
            <div class="inDiv">
              <div>
                <div class="flex">
                  <label for="patients" class="label_col">Patient ID</label>
                  <select name="patients" class="input_diag">
                    <option value="1">J100090060</option>
                  </select>
                  <p class="p_col">Jane</p>
                  <i class="fas fa-eye eyeclass"></i>
                </div>
                <div class="flex">
                  <label for="docId" class="label_col">Doctor ID</label>
                  <input type="text" name="docId" class="input_diag" style="margin-left: 23px;">
                  <p class="p_col">Dr. Jane Doe</p>
                </div>
              </div>
              <div class="box" style="height: 396px;padding:2px 10px 5px 10px">
                <div class="box-title">
                  Prescription
                </div>
                <div class="box-content">
                  <div class="box-div" style="height: 325px;">
                    <div class="box-div-head">
                      Drugs
                    </div>
                    <div>
                      <div style="margin-top: 8px;">
                        <div>
                          <input type="text" placeholder="select drug" class="diag-form-inp">
                        </div>
                        <div style="height: 40px;margin-top: 5px;overflow-y: auto;">
                          <span class="inp-select">
                            xxxx<i class="far fa-times-circle"></i>
                          </span>
                        </div>
                      </div>
                      <div style="max-height: 240px;margin-left: 10px; margin-right: 55px;">
                        <div class="drug-div">
                          <div class="drug-label">
                            Dosage
                          </div>
                          <div>
                            <input type="text" class="input_diag" style="width: 70px;">
                          </div>
                        </div>
                        <div class="drug-div">
                          <div class="drug-label">
                            Frequency
                          </div>
                          <div>
                            <select type="text" class="input_diag" style="width: 170px;">
                              <option value="">1 times a day</option>
                              <option value="">2 times a day</option>
                              <option value="">3 times a day</option>
                              <option value="">4 times a day</option>
                              <option value="">5 times a day</option>
                            </select>
                          </div>
                        </div>
                        <div class="drug-div">
                          <div class="drug-label">
                            No of days
                          </div>
                          <div>
                            <input type="text" class="input_diag" style="width: 70px;">
                          </div>
                        </div>
                        <div class="drug-div">
                          <div class="drug-label">
                            Instruction
                          </div>
                          <div>
                            <select type="text" class="input_diag" style="width: 170px;">
                              <option value="">Before Meal</option>
                              <option value="">After Meal</option>
                              <option value="">When Necessary</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style="margin-top: 15px;">
                      <div class="plus-icon">
                        <i class="fas fa-plus"></i>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
            <div class="box inDiv">
              <div class="box-title">
                Listing
              </div>
              <div class="box-content table-wrapper-scroll-y" style="overflow-y: scroll;max-height: 430px;">
                <div class="box-div list-box">
                  <i class="far fa-times-circle"></i>
                  <div> Paracetamol</div>
                  <div> 500 mg</div>
                  <div> 3 times a day</div>
                  <div> When necessary</div>
                  <div> After Meal</div>
                </div>
                <div class="box-div list-box">
                  <i class="far fa-times-circle"></i>
                  <div> Paracetamol</div>
                  <div> 500 mg</div>
                  <div> 3 times a day</div>
                  <div> When necessary</div>
                  <div> After Meal</div>
                </div>
                <div class="box-div list-box">
                  <i class="far fa-times-circle"></i>
                  <div> Paracetamol</div>
                  <div> 500 mg</div>
                  <div> 3 times a day</div>
                  <div> When necessary</div>
                  <div> After Meal</div>
                </div>
                <div class="box-div list-box">
                  <i class="far fa-times-circle"></i>
                  <div> Paracetamol</div>
                  <div> 500 mg</div>
                  <div> 3 times a day</div>
                  <div> When necessary</div>
                  <div> After Meal</div>
                </div>
              </div>
            </div>
            <div class="box inDiv">
              <div class="box-title">
                Attachments
              </div>
              <div class="box-content">
                <div class="box-div" style="height: 411px;">
                  <div class="box-div-head">
                    Images/Documents
                  </div>
                  <div>
                    <div class="table-wrapper-scroll-y"
                      style="height: 320px;padding-top: 16px; padding-bottom: 6px;overflow-y: auto;">
                      <span class="inp-select">
                        xxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxxxxxxxxxxxxxxxxxxxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxxxxxxxxxxxxxxxxxxxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxxxxxxxxxxxxxxxxxxxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxxxxxxxxxxxxxxxxxxxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxxxxxxxxxxxxxxxxxxxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxxxxxxxxxxxxxxxxxxxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxxxxxxxxxxxxxxxxxxxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxx<i class="far fa-times-circle"></i>
                      </span>
                      <span class="inp-select">
                        xxxxxxxxxxxxxxxxxxxxxxx<i class="far fa-times-circle"></i>
                      </span>
                    </div>
                  </div>
                  <div>
                    <div class="plus-icon">
                      <i class="fas fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="footer">
          <div class="footer-div">
            <div class="dots-div">
              <a href="diagonsitic_report(PAGE).php"> <span class="dot" style="background-color: black;"></span></a>
              <a href="diagonsitic-form(PAGE).php"> <span class="dot"></span></a>
            </div>
            <div class="icons-div">
              <div class="icons">
                <img src="src/img/printer.png" alt="printer">
              </div>
              <div class="icons" onclick="show('modal2')">
                <img src="src/img/rubbish-bin.png" alt="delete">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <script type="text/javascript">
    function toggleSidebar() {
      document.getElementById("toggler").classList.toggle("toggle-icon-placement");
      document.getElementById("sidebar").classList.toggle("small_width");
      var hiddiv = document.getElementsByClassName("small_sidebar");
      for (var i = 0; i < hiddiv.length; i++) {
        hiddiv[i].classList.toggle("hidden_sidebar");
      }
      document.getElementById("ad-width").classList.toggle("widthAdjust");
      var ele = document.getElementsByClassName('modal');
      for (i = 0; i < ele.length; i++) {
        ele[i].classList.toggle("pdl");
        ele[i].classList.toggle("pdl-hide");
      }
    }
  </script>
  <script>
    function resizeDiv() {
      var divtemp = document.getElementById("sliderdiv");
      if (divtemp.offsetWidth < 1035) {
        divtemp.style.overflowX = "scroll";

      } else {
        divtemp.style.overflowX = "hidden";
      }
    }
    function wt_htValidator(id, inp) {
      var input = document.getElementById(id);
      input.value = input.value.split(inp).join('');
      if (isNaN(input.value)) {
        alert("Enter number only, in Weight (unit kg) and height field (unit cm)");
        input.value = "";
      } else {
        if (input.value == "") {
          input.value += "0.0 "
        }
        input.value += inp;
      }
    }

  </script>
  <script>
    // script for modals
    function show(x) {
      document.getElementById(x).style.display = "flex";
    }
    window.onclick = function (event) {
      var ele = document.getElementsByClassName("modal");
      for (var i = 0; i < ele.length; i++) {
        if (event.target == ele[i]) {
          ele[i].style.display = "none";
        }
      }
    }
  </script>
  <!-- ______________________________________________________________________________________________________________________ -->
  <!-- delete modal here -->
  <div id="modal2" class="modal pdl">
  <div class="modal-wrap">
    <div class="modalContent2">
      <form style="margin-top: 7px;">
        <div style="text-align: center;margin-top: 25px;">
          <p class="label-modal2">Are you sure to delete?</label>
          <div class="form-div-modal2">
            <button class="modalBtn2" type="submit">Yes</button>
            <button class="modalBtn2" type="submit">No</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  <!-- delete modal till here -->
  <!-- save modal here -->
  <div id="modal3" class="modal pdl">
  <div class="modal-wrap">
    <div class="modalContent3">
      <form style="margin-top: 7px;">
        <div style="text-align: center;margin-top: 25px;">
          <p class="label-modal3">Want to save the changes made?</label>
          <div class="form-div-modal3">
            <button class="modalBtn3" type="submit">Yes</button>
            <button class="modalBtn3" type="submit">No</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>

  <script src="src/js/layout.js"></script>
  <!-- save modal till here -->
</body>

</html>