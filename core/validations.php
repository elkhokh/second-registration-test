<?php
function santize_data($name,$email,$salary,$phone){
    $email=filter_var($email, FILTER_SANITIZE_EMAIL);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $salary = filter_var($salary,FILTER_SANITIZE_NUMBER_INT);
    $phone = filter_var($phone,FILTER_SANITIZE_NUMBER_INT);
    return [
        'name' => $name,
        'email' => $email,
        'salary' => $salary,
        'phone' => $phone
    ];
}
function validateRequired($value,$fieldName){
    return empty($value) ? "$fieldName is required" : null;
}

function validateEmail($email){
    return filter_var($email,FILTER_VALIDATE_EMAIL) ? null : "Invaild email";;
}

function validateSalary($salary){
    return (is_numeric($salary) && $salary > 0) ? null : "Salary must be a postive number";
}

function validateEmployee($name,$email,$salary,$phone,$type){
    
     
    $sanitized = santize_data($name, $email, $salary, $phone);
    $sanitized['type']=$type;
    foreach($sanitized as $fieldName => $value){
        if($error = validateRequired($value,$fieldName)){
            return $error;
        }
    }

    if($error = validateEmail($email)){
        return $error;
    }

    if($error = validateSalary($salary)){
        return $error;
    }

    return null;
}