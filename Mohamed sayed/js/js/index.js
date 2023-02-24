alert();
$("#formValidation").validate({
  rules: {
    fname: {
      minlength: 2,
    },
    email: {
      email: true,
    },
    phone: {
      minlength: 10,
    },
    password: {
      minlength: 10,
    },
    address: {
      minlength: 10,
    },
  },
  messages: {
    fname: {
      required: "please enter your name",
      minlength: "Name at least 2 characters",
    },
    email: "please enter your email",
    password: "please enter your password",
    phone: "please enter your phone",
    address: "please enter your address",
    specialization: "please enter your specialization",
    price: "please enter your price",
  },
  submitHandler: function (form) {
    // some other code
    // maybe disabling submit button
    // then:
    $(form).submit();
  },
});
