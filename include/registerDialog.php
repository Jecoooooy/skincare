<div class="modal fade" id="registerDialog" tabindex="-1" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden shadow">
            <div class="d-flex">
                <div class="w-50 dialog-photo">
                    <img src="./images/modalPhoto.svg" class="object-fit-cover" alt="modal photo">
                </div>
                <div class="register-dialog p-4">
                    <div class="d-flex justify-content-end w-100 ">
                        <button type="button" id="closeModal" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <h2 class="modal-title mb-2" id="registerModalLabel">REGISTER TO LEARN MORE</h2>
                    <form id="registerForm" action="config/insert.php" method="POST">
                        <div class="form-group ">
                            <label class="form-label" for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <br>
                        <div class="g-recaptcha" data-sitekey="6LdS_4QqAAAAAODKIY9gTPwJTqCuTJNB33aIjwct"></div>
                        <br>
                        <button type="submit" class="btn w-100 btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>