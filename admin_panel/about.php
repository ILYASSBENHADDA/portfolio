<!-- Header -->
<?php include_once 'sections/header.php';?>
<?php require_once 'jsabout.php';?>


<!-- Infos -->
<div class="about-infos">
    <div class="container mb-5">
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Infos About -->
            <h2 class="mt-5">Infos About</h2>
            <hr>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="my_name">Name</label>
                        <input type="text" class="form-control" id="my_name" name="my_name" value="<?= $full_name; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="my_email">Email</label>
                        <input type="text" class="form-control" id="my_email" name="my_email" value="<?= $email; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="my_age">Age</label>
                        <input type="text" class="form-control" id="my_age" name="my_age" value="<?= $age; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="my_location">Location</label>
                        <input type="text" class="form-control" id="my_location" name="my_location" value="<?= $location; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="my_phone">Phone</label>
                        <input type="text" class="form-control" id="my_phone" name="my_phone" value="<?= $phone; ?>">
                    </div>
                </div>
            </div>
            <!-- end of Infos About -->

            <!-- Description About -->
            <h2 class="mt-5">Information</h2>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="form-group">
                        <label for="my_desc">Description</label>
                        <textarea class="form-control" id="my_desc" name="my_desc" rows="5"> <?= $first_description; ?> </textarea>
                    </div>  
                </div>
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label for="quick_desc">Quick Description</label>
                        <textarea class="form-control" id="quick_desc" name="quick_desc" rows="5"> <?= $second_description; ?> </textarea>
                    </div> 
                </div>
            </div>
            <div class="form-group">
                <input type="hidden" name="oldfile" value="<?= $cv; ?>">
                <label for="cv">CV file</label>
                <input type="file" class="form-control-file" id="cv" name="cv">
                <a type="hidden" src="<?= $cv; ?>"></a>
            </div>
            <!-- end of Description About -->

            <!-- Social Media -->
            <h2 class="mt-5">Social Media links</h2>
            <hr>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="github">Github</label>
                        <input type="text" class="form-control" id="github" name="github" value="<?= $github; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="linked-in">Linked-in</label>
                        <input type="text" class="form-control" id="linked-in" name="linked-in" value="<?= $linked_in; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control" id="twitter" name="twitter" value="<?= $twitter; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="intagram">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $instagram; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $facebook; ?>">
                    </div>
                </div>
            </div>
            <!-- end of Social Media -->
            
            <button type="submit" name="update" class="btn-ily-mode">Save Change</button>
        </form>
    </div>
</div>

<!-- Footer -->
<?php include_once 'sections/footer.php';?>