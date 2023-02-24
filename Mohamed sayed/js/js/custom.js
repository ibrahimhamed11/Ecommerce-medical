$("#formValidation").validate({
    rules: {
        name: {
            minlength: 2

        },
        email : {
            email:true
        },
        phone: {
            minlength:11
        },

    },
        messages: {
            name:{
                required: "please enter your name",
                minlength: "Name at least 2 characters"
            },
            email:"please enter your email",
            phone:"please enter your phone",
            subject:"please enter your subject",
            formMessage:"please enter your message"
    },
    submitHandler: function(form) {
      // some other code
      // maybe disabling submit button
      // then:
      $(form).submit();
    }
   });

