<?php 
    $sql = "SELECT * FROM influencers";
    $influencers_data = $conn->query($sql);
?>
<section id="influence">
    <div class="container-fluid">
        <h2 id="influenceTitle" class="text-center fs-1 text-center">What's your Influence?</h2>
        <br>
        <h5 id="influenceSubTitle" class="text-center fs-3 text-black-50 fw-light">Is this you? Could this be you? <br> Are you ready to be an influencer?</h5>
        <div class="row justify-content-evenly mt-4">
            <?php while($data = mysqli_fetch_assoc($influencers_data)) : ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 py-4" style="min-height:550px;">
                    <div id="cardInfluencer<?= $data['id']; ?>" class="card card-influencer rounded-5 overflow-hidden shadow m-auto" style="max-width:450px;">
                        <div class="w-100 overflow-hidden position-relative influencer-photo-container">
                            <img src="<?= $data['image']; ?>" class="img-fluid influencer-photo  card-img-top " alt="no photo available">
                        </div>
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start card-body ">
                            <img src="<?= $data['image']; ?>" class=" rounded-circle  shadow" style="object-fit: cover;"   alt="avatar" width="70" height="70">
                            <div class="px-4">
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