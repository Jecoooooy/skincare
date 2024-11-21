
<?php
    $sql = "SELECT * FROM about";
    $about_data = $conn->query($sql);
?>
<section id="about">
    <div class="container">
        <?php while($data = mysqli_fetch_assoc($about_data)) : ?>
            <div class="row py-3 justify-content-center align-items-center <?= ($data['id'] % 2 == 1) ? 'flex-row-reverse' : ''; ?> " >
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 d-flex justify-content-center align-items-center" style="min-height:300px;">
                    <div id="aboutPhoto<?= $data['id']; ?>" class="" style="max-width:450px;">
                        <img src="<?= $data['image']; ?>" class="img-fluid object-fit-cover " alt="no photo available">
                    </div>
                </div>
                <div class=" col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12 d-flex justify-content-center flex-column align-items-center" style="min-height:300px;">
                    <div class=" h-100 ">
                        <h2 id="aboutTitle<?= $data['id']; ?>" class=" fs-1 "> <?= $data['title']; ?></h2>
                        <span id="aboutSubtitle<?= $data['id']; ?>" class="subtitle fs-5"><?= $data['subtitle']; ?></span>
                        <div  class="border-start border-primary border-5 ps-3 text-justify">
                            <p id="aboutContent<?= $data['id']; ?>" class="text-black-50 fs-5"><?= $data['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>


