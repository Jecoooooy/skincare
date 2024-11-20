
<div class="modal fade" id="registerDialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden shadow flex-row">
            <div class="col">
                <img src="./images/modalPhoto.svg" class=" object-fit-cover" alt="modal photo">
            </div>
            <div class="modal-body col">
                <form id="mockupForm">
                    <div class="d-flex align-items-center justify-content-between pb-5">
                        <h5 class="modal-title" id="exampleModalLabel">Register to learn more</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="form-underlined">
                        <input type="text" id="name" name="name" class="form-control underline" placeholder=" " />
                        <label for="name" class="form-label">Name</label>
                    </div>
                    <div class="form-underlined">
                        <input type="email" id="email" name="email" class="form-control" placeholder=" " />
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-underlined">
                        <textarea type="text" id="message" name="message"  class="form-control"  rows="3" placeholder=" "></textarea>
                        <label for="message" class="form-label">Message</label>
                    </div>
                    <div id="responseMessage" class="mt-3"></div>
                    <button type="submit" class="btn w-100 btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>