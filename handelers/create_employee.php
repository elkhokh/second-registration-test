<?php

include __DIR__ . "/../core/validations.php";
include __DIR__ . "/../core/functions.php";



// include "../core/validations.php";
// include "../core/functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];

    $error = validateEmployee($name, $email, $salary, $phone, $type);

    if(!empty($error)){
        setMessages('danger',$error);
        header("Location: ../form_employee.php");
        exit;
    }
    
    if(addEmployee($name, $email, $salary, $phone, $type)){
        setMessages('success', "Employee added sucessfully");
        header("Location: ../form_employee.php");
        exit;
    }else{
        setMessages('danger',"Fail added Employee");
        header("Location: ../form_employee.php");
        exit;
    }
}
