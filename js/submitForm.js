$(document).ready(function() {
    // Apply jQuery validation to the form
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
                alert("Please verify that you are not a robot.");
                return false;
            }
        
            // Prevent the form from submitting normally
            event.preventDefault();
            var formData = $(form).serialize(); // Serialize form data
            
            formData += "&g-recaptcha-response=" + encodeURIComponent(captchaResponse);
            // Make an AJAX request to insert.php
            $.ajax({
                type: "POST",
                url: "config/insert.php",      
                data: formData,
                dataType: "json", // Expecting a JSON response
                success: function(response) {
                    // Check the response status
                    if (response.status === "success") {
                        // Show success message
                        $("#notification").html('<div class="alert shadow alert-success alert-dismissible fade show" id="auto-close-alert" role="alert">' + response.message + '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                        $(form).trigger('reset');
                        var closeModal = document.getElementById('closeModal')
                        setTimeout(() => {
                            closeModal.click()
                        }, 500);
                    } else {
                        // Show error message
                        $("#notification").html('<div class="alert shadow alert-danger alert-dismissible fade show" id="auto-close-alert" role="alert">' + response.message + '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    }
                },
                error: function() {
                    // Handle AJAX request errors
                    $("#notification").html('<div class="alert shadow alert-danger alert-dismissible fade show" id="auto-close-alert" role="alert">An error occurred. Please try again later.  <button type="button"  class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                }
            }).then(()=>{
                setTimeout(function() {
                    var alert = document.getElementById('auto-close-alert');
                    var closeButton = alert.querySelector('.btn-close');
                    closeButton.click(); // Simulate clicking the close button
                }, 3000);
            })

        }
    });
});