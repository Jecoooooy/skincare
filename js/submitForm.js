$(document).ready(function () {
    // Initialize form validation
    $('#mockupForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must be at least 2 characters long"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            message: {
                required: "Please enter your message",
                minlength: "Your message must be at least 10 characters long"
            }
        },
        submitHandler: function (form) {
            // Serialize form data
            const formData = $(form).serialize();

            // AJAX request to submit form data
            $.ajax({
                url: './php/insert.php',
                method: 'POST',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        $('#responseMessage').html(`
                            <div class="alert alert-success">${response.message}</div>
                        `);
                        form.reset(); // Reset the form after success
                    } else {
                        $('#responseMessage').html(`
                            <div class="alert alert-danger">${response.message}</div>
                        `);
                    }
                },
                error: function () {
                    $('#responseMessage').html(`
                        <div class="alert alert-danger">An error occurred. Please try again later.</div>
                    `);
                }
            });
        }
    });
});
