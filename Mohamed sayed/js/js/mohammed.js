document.querySelector(".donate-button").addEventListener("click", function () {
  document.querySelector(".popup1").style.display = "flex";
});

document.querySelector(".close1").addEventListener("click", function () {
  document.querySelector(".popup1").style.display = "none";
});

document
  .querySelector(".request-button")
  .addEventListener("click", function () {
    document.querySelector(".popup2").style.display = "flex";
  });

document.querySelector(".close2").addEventListener("click", function () {
  document.querySelector(".popup2").style.display = "none";
});

// var formButton = document.querySelectorAll(".form-button");
// array.forEach((formButton) => {
//   this.addEventListener("click", function () {
//     document.querySelectorAll(".popup").style.display = "flex";
//   });
// });

// var formClose = document.querySelectorAll(".close");
// array.forEach((formClose) => {
//   this.addEventListener("click", function () {
//     document.querySelectorAll(".popup").style.display = "flex";
//   });
// });
