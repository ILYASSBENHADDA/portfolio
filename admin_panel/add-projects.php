<!-- Header -->
<?php include_once 'sections/header.php';?>
<?php require_once 'action.php';?>

<!-- Add Project -->
<div class="projects">
    <!--- Alert ---->
    <?php if(isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <?php $_SESSION['response'];?>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?= $_SESSION['response'];?>
        </div>
        <?php } unset($_SESSION['response']);?>
    <!--- end of Alert ---->

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <!-------- FORM --------->
                <h2 class="text-center">Add Project</h2>
                <form action="action.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $id; ?>">
                    <div class="form-group">
                        <label for="project_title">Project Title</label>
                        <input type="text" class="form-control" id="project_title" name="project_title" value="<?= $project_title; ?>">
                    </div>
                    <div class="form-group">
                        <label for="project_description">Project Description</label>
                        <textarea class="form-control" id="project_description" name="project_description" rows="5"> <?= $project_description; ?> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="project_link">Review Link</label>
                        <input type="text" class="form-control" id="project_link" name="project_link" value="<?= $project_link; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="oldimage" value="<?= $project_image; ?>">
                        <label for="project_image">Image Example</label>
                        <input type="file" class="form-control-file" name="project_image" id="project_image">
                        <img src="<?= $project_image; ?>" width="120" class="img-thumbnail">
                    </div>
                    <div class="form-submit">
                        <?php if($update == true){ ?>
                            <button type="submit" name="update" class="btn-ily-mode">Update Record</button>
                        <?php } else { ?>
                            <button type="submit" name="add" class="btn-ily-mode">Add Project</button>
                        <?php } ?>
                    </div>
                </form>
                <!-------- end of FORM --------->
            </div>
            <div class="col-12 col-lg-8">
                <!-- TABLE -->
                <?php
                    $query = "SELECT * FROM projects";	
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                ?>

                <h2 class="text-center">Records in Database</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Link</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while($row=$result->fetch_assoc()) { ?>
                        <tr>
                            <th scope="row"><?= $row['id']; ?></th>
                            <td><?= $row['project_title']; ?></td>
                            <td><img src="<?= $row['project_image']; ?>" width="90px"></td>
                            <td><?= $row['project_description']; ?></td>
                            <td><?= $row['project_link']; ?></td>
                            <td><?= $row['project_date']; ?></td>
                            <td>
                                <a href="view.php?view=<?= $row['id']; ?>" class="badge badge-primary">View</a> |
                                <a href="action.php?delete=<?= $row['id']; ?>" onclick="return confirm('Do you want delete this product?')" class="badge badge-primary">Delete</a> |
                                <a href="add-projects.php?edit=<?= $row['id']; ?>" class="badge badge-primary">Edit</a> 
                            </td>
                        </tr>
                    <?php } ?> 
                    </tbody>
                </table>
                <!-- end of TABLE -->
            </div>
        </div>
    </div>
</div>

<!-- end of Add Project -->

<!-- Footer -->
<?php include_once 'sections/footer.php';?>