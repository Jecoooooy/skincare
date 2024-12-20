$(document).ready(function() {
    $("#registerForm").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 2
            },
            last_name: {
                required: true,
                minlength: 2
            },
            phone_number: {
                required: true,
                minlength: 10,
                maxlength: 15
            },
            email: {
                required: true,
                email: true
            },
            'g-recaptcha-response': {
                required: true
            }
        },
        messages: {
            first_name: {
                required: "Please enter your first name",
                minlength: "Your first name must be at least 2 characters long"
            },
            last_name: {
                required: "Please enter your last name",
                minlength: "Your last name must be at least 2 characters long"
            },
            phone_number: {
                required: "Please enter your phone number",
                minlength: "Your phone number must be at least 10 characters long",
                maxlength: "Your phone number cannot be more than 15 characters long"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            'g-recaptcha-response': {
                required: "Please verify that you are not a robot."
            }
        },
        submitHandler: function(form, event) {
            var captchaResponse = grecaptcha.getResponse();
            
            if (!captchaResponse) {
                // alert("Please verify that you are not a robot.");
                // return false;
                $("#notification").html('<div class="alert alert-danger alert-dismissible fade show" id="auto-close-alert" role="alert">Please verify that you are not a robot.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                setTimeout(function() {
                    var alert = document.getElementById('auto-close-alert');
                    var closeButton = alert.querySelector('.btn-close');
                    closeButton.click();  // Simulate clicking the close button
                }, 3000);
                return false;
            }

            event.preventDefault();
            
            var formData = $(form).serialize();  
            formData += "&g-recaptcha-response=" + encodeURIComponent(captchaResponse);

            $.ajax({
                type: "POST",
                url: "config/insert.php",      
                data: formData,
                dataType: "json", 
                success: function(response) {
                    if (response.status === "success") {
                        // if success
                        $("#notification").html('<div class="alert alert-success alert-dismissible fade show" id="auto-close-alert" role="alert">' + response.message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                        $(form).trigger('reset');  // Reset form fields
                        grecaptcha.reset(); // Reset capcha
                        setTimeout(function() {
                            $('#closeModal').click();  // Close modal after 500ms
                        }, 500);
                    } else {
                        // if error
                        $("#notification").html('<div class="alert alert-danger alert-dismissible fade show" id="auto-close-alert" role="alert">' + response.message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                        grecaptcha.reset(); // Reset capcha
                    }
                },
                error: function() {
                    // Handle request errors
                    $("#notification").html('<div class="alert alert-danger alert-dismissible fade show" id="auto-close-alert" role="alert">An error occurred. Please try again later.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                }
            }).then(() => {
                // Automatically close the alert 
                setTimeout(function() {
                    var alert = document.getElementById('auto-close-alert');
                    var closeButton = alert.querySelector('.btn-close');
                    closeButton.click();  // Simulate clicking the close button
                }, 3000);
            });
        }
    });
});
