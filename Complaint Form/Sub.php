<?php

if(isset($_POST['submit'])){

    if(isset($_POST['firstName']) && !empty($_POST['firstName'])){
    $firstname = $_POST['firstName'];
    }
    
    if(isset($_POST['lastName']) && !empty($_POST['lastName'])){
    $lastname = $_POST['lastName'];
    }
    
    if(isset($_POST['surName']) && !empty($_POST['surName'])){
    $surname= $_POST['surName'];
    }
    if(isset($_POST['courseregistration']) && !empty($_POST['courseregistration'])) {
    $courseregistration= $_POST['courseregistration'];
    }
    
    if(isset($_POST['department']) && !empty($_POST['department'])){
    $department= $_POST['department'];
    }
    
    if(isset($_POST['email']) && !empty($_POST['email'])){
    $email= $_POST['email'];
    }
    
    if(isset($_POST['mobile']) && !empty($_POST['mobile'])){
    $mobile= $_POST['mobile'];
    }
    
    if(isset($_POST['checkbox']) && !empty($_POST['checkbox'])){
    $checkbox= $_POST['checkbox'];
    }

    if(isset($_POST['complaint-description']) && !empty($_POST['complaint-description'])){
    $complaintdescription= $_POST['complaint-description'];
    }
    
    if(isset($_POST['reset']) && !empty($_POST['reset'])){
    $reset= $_POST['reset'];
    }

    $studentdata = file_get_contents('form.json');
    $datalist = json_decode($studentdata);

    $profile =array(
        'firstName' =>$firstname,
        'lastName'  =>$lastname,
        'surname' =>$surname,
        'course-registration' =>$courseregistration,
        'department' =>$department,
        'email' =>$email,
        'mobile' =>$mobile,
        'checkbox' =>$checkbox,
        'complaint-description' =>$complaintdescription,
        'reset' =>$reset
    );
    
    array_push($datalist, $profile);
    
    $en_datalist = json_encode($datalist);
    
    file_put_contents('form.json', $en_datalist);
    
    
    echo 'Information Submitted';
    }
    
    ?>
            