<?php 
    $sql = "SELECT * FROM influencers";
    $influencers_data = $conn->query($sql);
?>
<section id="influence">
    <div class="container-fluid">
        <h2 class="text-center fs-1 text-center">What's your Influence?</h2>
        <br>
        <h5 class="text-center fs-3 text-black-50 fw-light">Is this you? Could this be you? <br> Are you ready to be an influencer?</h5>
        <div class="row justify-content-evenly mt-4">
            <?php while($data = mysqli_fetch_assoc($influencers_data)) : ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-10 py-4">
                    <div class="card rounded-5 overflow-hidden shadow m-auto" style="max-width:450px;">
                        <!-- <div> -->
                            <img src="<?= $data['image']; ?>" class="img-fluid  card-img-top " alt="no photo available">
                        <!-- </div> -->
                        <div class="d-flex align-items-center card-body ">
                            <img src="<?= $data['image']; ?>" class=" rounded-circle border border-dark shadow" style="object-fit: cover;"   alt="avatar" width="70" height="70">
                            <div class="px-2">
                                <h5><?= $data['name']; ?></h5>
                                <p><?= $data['email']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>

    </div>
</section>