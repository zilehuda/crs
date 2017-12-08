$(document).ready(function()  {
   // validate the comment form when it is submitted
		$("#commentForm").validate();

                // validate signup form on keyup and submit
                $("#loginForm").validate({
                    rules: {

                        password: {
                            required: true,
                            minlength: 5
                        },
                        email: {
                            required: true,
                            email: true
                        }
                    }
                });
                $("#registerForm").validate({
                    rules: {
                        fname: {
                          lettersonly: true,
                          required: true
                        },
                        gender: "required",
                        phone: {
                          required: true,
                          minlength: 11,
                          maxlength: 11,
                          number: true
                        },
                        nic:{
                          required: true,
                          minlength: 14,
                          maxlength: 14,
                          number: true
                        },
                        city:
                        {
                        required: true,
                        number: false,
                        lettersonly: true
                        },
                        password: {
                            required: true,
                            minlength: 5
                        },
                        confirm_password: {
                            required: true,
                            minlength: 5,
                            equalTo: "#password"
                        },
                        email: {
                            required: true,
                            email: true
                        }
                    },
                    messages: {
                        fname:  {
                          required: "please enter your name"
                        },
                        password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long"
                        },
                        confirm_password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long",
                            equalTo: "Please enter the same password"
                        },
                        email: "Please enter a valid email address",
                        gender: "Please accept our policy",
                        phone: {
                          required: "Please Enter Your phone",
                          minlength: "Please Enter 11 digit number",
                          maxlength: "Please Enter 11 digit number",
                          number: "Please Enter only digit"
                        },
                        nic:{
                            required: "Please Enter Your NIC",
                            minlength: "Please Enter 14 digit number",
                            maxlength: "Please Enter 14 digit number",
                            number: "Please Enter only digit"
                        },
                        city: {
                          required: "please enter your city"
                        }
                    }
                });

                jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Please Enter only character");

});
