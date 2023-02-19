<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/form.css"/>
    <title>FormOfDoctor</title>
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input
              type="text"
              name="fullName"
              placeholder="Enter Your name"
              id="name"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input
              type="email"
              name="email"
              placeholder="Enter Your email"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input
              type="password"
              name="pass"
              placeholder="Enter Your password"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input
              type="text"
              name="phone"
              placeholder="Enter Your phone"
              id="phone"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input
              type="text"
              name="address"
              placeholder="Enter Your address"
              id="address"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">specialization</span>
            <input
              type="text"
              name="specialization"
              placeholder="Enter Your specialization"
              id="specific"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">price</span>
            <input
              type="text"
              name="price"
              placeholder="Enter Your price"
              id="price"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Role</span>
            <input
              type="text"
              name="Role"
              value="Doctor"
              id="details"
              readonly
            />
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" />
          <input type="radio" name="gender" id="dot-2" />
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">female</span>
            </label>
          </div>
          <div class="img">
            <input type="file" id="image" accept="image/png, image/jpg" />
          </div>
        </div>
        <div class="button">
          <input type="submit" id="save"  value="Register" />
        </div>
      </form>
    </div>
    <script src="./assets/js/doc.js"></script>
  </body>
</html>
