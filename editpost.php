<?php 
    require_once 'db/conn.php';
    //Get Values from post operation
    if(isset($_POST['submit'])){
    //extract the values from the $Post array
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact  = $_POST['phone'];
    $specialty = $_POST['specialty'];

    $result = $crud->editAttendee($id,$fname,$lname,$dob,$email,$contact,$specialty);
    if($result){
        header("Location: viewrecords.php");  
    }
    else{
        echo 'error';
    }

    }
    else{echo 'erro';
    }   

    //call crud function

    //redirect to index.php page
    ?>