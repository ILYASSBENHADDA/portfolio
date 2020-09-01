<?php
session_start();
require_once 'login/config.php';

// ADD projects

if(isset($_POST['add'])){
    $project_title 		    = $_POST['project_title'];
    $project_description    = $_POST['project_description'];
    $project_link           = $_POST['project_link'];
    $project_image          = $_FILES['project_image']['name'];
    $upload                 = "uploads/".$project_image;
                     
    $query = "INSERT INTO projects (project_title, project_description, project_link, project_image) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss",$project_title, $project_description, $project_link, $upload);
    $stmt->execute();
    move_uploaded_file($_FILES['project_image']['tmp_name'], $upload);
    
    header('location: add-projects.php');
    $_SESSION['response']="Successfully Inserted to the database!";
    $_SESSION['res_type']="success";

}

// DELETE projects

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "SELECT project_image FROM projects WHERE id=?";
    $stmt2 = $conn->prepare($sql);
    $stmt2->bind_param("i",$id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row = $result2->fetch_assoc();

    $imagepath=$row['project_image'];
    unlink($imagepath);

    $query = "DELETE FROM projects WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();

    header('location: add-projects.php');
    $_SESSION['response']="Successfully Deleted!";
    $_SESSION['res_type']="danger";
}

// EDIT projects
$update = false;
$id                     ="";
$project_title          ="";
$project_description    ="";
$project_link           ="";
$project_image          ="";

if(isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = "SELECT * FROM projects WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $id                     = $row['id'];
    $project_title          = $row['project_title'];
    $project_description    = $row['project_description']; 
    $project_link           = $row['project_link'];
    $project_image          = $row['project_image'];
    
    $update = true;
}

if(isset($_POST['update'])) {
    $id                     = $_POST['id'];
    $project_title 		    = $_POST['project_title'];
    $project_description    = $_POST['project_description'];
    $project_link           = $_POST['project_link'];
    $oldimage               = $_POST['oldimage'];

    if(isset($_FILES['project_image']['tmp_name'])&&($_FILES['project_image']['tmp_name']!="")){
        $newimage = "uploads/".$_FILES['project_image']['name'];
        unlink($oldimage);
        move_uploaded_file($_FILES['project_image']['tmp_name'], $newimage);
    }
    else {
        $newimage=$oldimage;
    }
    $query="UPDATE projects SET project_title=?, project_description=?, project_link=?, project_image=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssi",$project_title, $project_description, $project_link, $newimage, $id);
    $stmt->execute();

    header('location: add-projects.php');
    $_SESSION['response']="Record Update Successfully!";
    $_SESSION['res_type']="success";
}

// PREVIEW
// if(isset($_GET['view'])) {
//     $id = $_GET['view'];

//     $query = "SELECT * FROM projects WHERE id=?";
//     $stmt = $conn->prepare($query);
//     $stmt->bind_param("i",$id);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     $row = $result->fetch_assoc();

//     $vid                    = $row['id'];
//     $vprojects_name          = $row['project_title'];
//     $vproject_description         = $row['project_description']; 
//     $vproject_link   = $row['project_link'];
//     $vproject_image         = $row['project_image'];
    
    
// }