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
            <a class="active d-flex align-items-center" href="dashboard.html">
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
            <a class="d-flex align-items-center" href="admin.html">
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
        <!-- Start Cards -->
        <div class="row justify-content-center itmes">
          <div class="card col-xl-2 col-md-6 col-sm-6">
            <div class="card_body">
              <div class="text">
                <h3 class="">Doctor</h3>
                <h3 class="">25</h3>
              </div>
              <div class="icons">
                <i class="fa-solid fa-user-doctor"></i>
              </div>
            </div>
          </div>

          <div class="card col-xl-2 offset-1 col-md-6 col-sm-6">
            <div class="card_body">
              <div class="text">
                <h3 class="">Patient</h3>
                <h3 class="">50</h3>
              </div>
              <div class="icons">
                <i class="fa fa-wheelchair ms-icon-mr"></i>
              </div>
            </div>
          </div>

          <div class="card col-xl-2 offset-1 col-md-6 col-sm-6">
            <div class="card_body">
              <div class="text">
                <h3 class="">Pharmacies</h3>
                <h3 class="">10</h3>
              </div>
              <div class="icons d-flex">
                <i class="fas fa-briefcase-medical ms-icon-mr"></i>
              </div>
            </div>
          </div>

          <div class="card col-xl-2 offset-1 col-md-6 col-sm-6">
            <div class="card_body">
              <div class="text">
                <h3 class="">Admin</h3>
                <h3 class="">6</h3>
              </div>
              <div class="icons">
                <i class="fas fa-briefcase-medical ms-icon-mr"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Tables -->

        <div class="patient bg-white">
          <div class="table-header">
            <h2>PATIENT LIST</h2>
          </div>
          <div class="responsive-table">
            <table>
              <thead>
                <tr>
                  <td>Photo</td>
                  <td>Patient</td>
                  <td>Doctor</td>
                  <td>Date</td>
                  <td>Timing</td>
                  <td>Contact</td>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <img
                      class="rounded-circle"
                      src="images/patient-1 (1).jpg"
                      alt=""
                    />
                  </td>
                  <td>Bernardo Galaviz</td>
                  <td>Dr. Cristina Groves</td>
                  <td>01 Dec 2023</td>
                  <td>5:00 PM</td>
                  <td>+01-789-654-123</td>
                </tr>

                <tr>
                  <td>
                    <img
                      class="rounded-circle"
                      src="images/patient-5.jpg"
                      alt=""
                    />
                  </td>
                  <td>Jenni</td>
                  <td>Dr. Richard Miles</td>
                  <td>01 Dec 2023</td>
                  <td>8:00 AM</td>
                  <td>+10-654-654-991</td>
                </tr>

                <tr>
                  <td>
                    <img
                      class="rounded-circle"
                      src="images/patient-6.jpg"
                      alt=""
                    />
                  </td>
                  <td>John Doe</td>
                  <td>Dr. Andrew</td>
                  <td>01 Dec 2023</td>
                  <td>10:00 AM</td>
                  <td>+10-709-254-445</td>
                </tr>

                <tr>
                  <td>
                    <img
                      class="rounded-circle"
                      src="images/patient-8.jpg"
                      alt=""
                    />
                  </td>
                  <td>Alesdro Guitto</td>
                  <td>Dr. Robert</td>
                  <td>01 Dec 2023</td>
                  <td>2:00 PM</td>
                  <td>+10-102-225-333</td>
                </tr>

                <tr>
                  <td>
                    <img
                      class="rounded-circle"
                      src="images/patient-1.jpg"
                      alt=""
                    />
                  </td>
                  <td>Bernardo Galaviz</td>
                  <td>Dr. Cristina Groves</td>
                  <td>01 Dec 2023</td>
                  <td>5:00 PM</td>
                  <td>+01-789-654-123</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="container p-4">
          <div class="row">
            <div class="list-group col-xl-3 col-l-3 col-md-12 col-sm-12 p-0">
              <ul class="p-0 m-0">
                <li class="list-group-item"><h3>Doctors List</h3></li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Dr. Cristina Groves</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Dr. Cristina Groves</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Dr. Cristina Groves</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Dr. Cristina Groves</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Dr. Cristina Groves</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Dr. Cristina Groves</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-xl-6 col-l-6 col-md-12 col-sm-12">
              <iframe
                class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29138.08383720805!2d32.91761581994239!3d24.092333602987626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14367b5ab1a30e5f%3A0xfb109fe337cabccb!2z2KPYs9mI2KfZhg!5e0!3m2!1sar!2seg!4v1675864765900!5m2!1sar!2seg"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>

            <div class="list-group col-xl-3 col-l-3 col-md-12 col-sm-12 p-0">
              <ul class="p-0 m-0">
                <li class="list-group-item"><h3>Pharmacies List</h3></li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Nahdi Pharmacy</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Abdeen Pharmacy</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>El-Ezaby Pharmacy</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>19011 Pharmacy</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Ezz El Din Pharmacy</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>

                <li class="list-group-item">
                  <img
                    class="rounded-circle"
                    src="images/doctor-1.jpg"
                    alt=""
                  />
                  <p>Whites Pharmacy</p>
                  <div class="form-switch">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="flexSwitchCheckDefault"
                    />
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- End Tables -->
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
