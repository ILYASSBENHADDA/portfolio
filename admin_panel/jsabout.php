<?php
require_once 'login/config.php';

// EDIT infos

    $query = "SELECT * FROM infos WHERE id = 1";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $first_description  = $row['first_description'];
    $second_description = $row['second_description']; 
    $full_name          = $row['full_name'];
    $email              = $row['email'];
    $age                = $row['age'];
    $location           = $row['my_location'];
    $phone              = $row['phone'];
    $github             = $row['github'];
    $facebook           = $row['facebook'];
    $twitter            = $row['twitter'];
    $instagram          = $row['instagram'];
    $linked_in          = $row['linkedin'];
    $cv                 = $row['cv_file'];


if(isset($_POST['update'])) {
    $first_description  = $_POST['my_desc'];
    $second_description = $_POST['quick_desc'];
    $full_name          = $_POST['my_name'];
    $email              = $_POST['my_email'];
    $age                = $_POST['my_age'];
    $location           = $_POST['my_location'];
    $phone              = $_POST['my_phone'];
    $github             = $_POST['github'];
    $facebook           = $_POST['facebook'];
    $twitter            = $_POST['twitter'];
    $instagram          = $_POST['instagram'];
    $linked_in          = $_POST['linked-in'];
    $oldfile            = $_POST['oldfile'];
    

    if(isset($_FILES['cv']['tmp_name'])&&($_FILES['cv']['tmp_name']!="")){
        $newfile = "uploads/".$_FILES['cv']['name'];
        unlink($oldfile);
        move_uploaded_file($_FILES['cv']['tmp_name'], $newfile);
    }
    else {
        $newfile=$oldfile;
    }
    $query="UPDATE `infos` SET `full_name`='".$full_name."', `phone`='".$phone."', `email`='".$email."', `age`='".$age."', `my_location`='".$location."', `first_description`='".$first_description."', `second_description`='".$second_description."', `cv_file`='".$newfile."', `github`='".$github."', `facebook`='".$facebook."', `twitter`='".$twitter."', `instagram`='".$instagram."', `linkedin`='".$linked_in."' WHERE `id`=1";

    $result = mysqli_query($conn, $query);


}
    //     if($result) {
//         echo 'Data Updated';
//     }
//     else{
//         echo 'Data Not Updated';
//     }
//     echo $linked_in;
    
//    mysqli_close($conn);




    
    
    // $stmt = $conn->prepare($query);
    // $stmt->bind_param("sissssssssssi",$full_name, $phone, $email, $location, $first_description, $second_description, $newfile, $github, $facebook, $twitter, $instagram, $linked_in, $id);
    // $stmt->execute();

    
    // $query_run = mysqli_query($conn, $query);

//$query = "UPDATE `users` SET `fname`='".$fname."',`lname`='".$lname."',`age`= $age WHERE `id` = $id";

    // $stmt = $conn->prepare($query);
    // $stmt->bind_param("sissssssssss",$full_name, $phone, $email, $location, $first_descriptionx, $second_description, $newfile, $github, $facebook, $twitter, $instagram, $linked_in);
    
    
    // $query="UPDATE infos SET full_name='?', phone='?', email='?', my_location='?', first_description='?', second_description='?', cv_file='?' github='?', facebook='?', twitter='?', instagram='?', linkedin='?'";
    // $stmt = $conn->prepare($query);
    // $stmt->bind_param("sissssssssss",$full_name, $phone, $email, $location, $first_descriptionx, $second_description, $newfile, $github, $facebook, $twitter, $instagram, $linked_in);
    // $stmt->execute();

    // if (mysqli_query($conn, $query)) {
    //     echo "Record updated successfully";
    //   } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    //   }
      
    //   mysqli_close($conn);
