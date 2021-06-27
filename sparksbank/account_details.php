<?php
include 'config.php';

if(isset($_POST['save_select']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $account = $_POST['account'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO customers (fname,lname,account,amount) VALUES ('$fname','$lname','$account','$amount')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Account Succesfully created";
        header("Location: account_details.php");
    }
    else
    {
        $_SESSION['status'] = "Failed in creating account";
        header("Location: account_details.php");
    }
   }


?>