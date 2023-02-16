<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- Bootstrap css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome css file -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Our css file -->
    <link rel="stylesheet" href="css/new.css" />
    <!-- Google Fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="page d-flex">
      <div id="side" class="sidebar">
        <!-- logo -->
        <div class="logo text-center text-white">
          <a class="logo__icon d-block text-light fw-bold" href="dashboard.html"
            ><i class="fa-solid fa-hand-holding-medical"></i>
            Re<span>ع</span>aya</a
          >
          <a class="img__link d-block" href="#"
            ><img class="img-fluid" src="images/admin.png" alt="Admin"
          /></a>
          <h5 class="mt-2 mb-2 fw-semibold">Dr.Mohammed</h5>
          <h6 class="mb-3">Admin</h6>
        </div>
        <ul>
          <li>
            <a class="d-flex align-items-center" href="dashboard.html">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-items-center" href="doctor.html">
              <i class="fa-solid fa-stethoscope"></i>
              <span>Doctor</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-items-center" href="pharmacies.html">
              <i class="fa-solid fa-prescription-bottle-medical"></i>
              <span>Pharmacies</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-items-center" href="patient.html">
              <i class="fa-solid fa-user"></i>
              <span>Patient</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-items-center" href="appointment.html">
              <i class="fa-regular fa-square-check"></i>
              <span>Appointment</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-items-center" href="order.html">
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span>Order</span>
            </a>
          </li>
          <li>
            <a class="active d-flex align-items-center" href="admin.html">
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span>Admin</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="content">
        <!-- start head -->
        <div class="head">
          <div onclick="hide()" class="menu">
            <i class="fa-solid fa-bars"></i>
          </div>
          <div class="icon d-flex align-items-center">
            <img src="images/admin.png" alt="" />
          </div>
        </div>
        <!-- end head -->

        <!-- start form -->
        <div class="popup">
          <div class="form-container">
            <div class="close">
              <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <form method="post" action="" id="addForm">
              <div class="input-control mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="validateName"
                  placeholder="Name"
                />
                <div class="error"></div>
              </div>
              <div class="input-control mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="validateEmail"
                  placeholder="Email"
                />
                <div class="error"></div>
              </div>
              <div class="input-control mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="validatePhone"
                  placeholder="Phone"
                />
                <div class="error"></div>
              </div>
              <div class="input-control mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="validateAge"
                  placeholder="Age"
                />
                <div class="error"></div>
              </div>
              <div class="input-control mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="validateAddress"
                  placeholder="Address"
                />
                <div class="error"></div>
              </div>
              <div class="input-control mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="validateDisease"
                  placeholder="Disease"
                />
                <div class="error"></div>
              </div>
              <div class="input-control mb-3 mt-4">
                <input
                  type="submit"
                  class="form-control btn btn-outline-primary"
                  id="submit"
                />
              </div>
            </form>
          </div>
        </div>
        <!-- end form -->

        <!-- start patient table -->
        <div class="patient bg-white">
          <div class="table-header">
            <h2>ADMINS LIST</h2>
            <a href="#" id="add-button">Add admin</a>
          </div>
          <div class="responsive-table">
            <table>
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Address</td>
                  <td>Phone</td>
                  <td>Email</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Angelica</td>
                  <td>Linden Avenue, Orlando</td>
                  <td>(797) 506 1265</td>
                  <td>angelicaramos@example.com</td>
                  <td class="d-flex">
                    <a href="#" class="edit col-5 text-center">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="#" class="delete col-5 offset-2 text-center">
                      <i class="fa-solid fa-trash-can"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- end patiente -->
      </div>
    </div>
  </body>
  <!-- Bootstrap js file -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- Font Awesome js file -->
  <script src="js/all.min.js"></script>
  <!-- Our js file -->
  <script src="js/main.js"></script>
</html>
