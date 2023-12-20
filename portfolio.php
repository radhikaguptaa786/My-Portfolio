<?php
    if(isset($_POST['submit']))
    {
        //create Database
        $link=mysqli_connect("localhost","root","","");

        if($link===false){
            die("eroor:Could not connect".mysqli_connect_error($link));
        }
        
        $sql_db="CREATE DATABASE PortfolioContact";
        if(mysqli_query($link,$sql_db))
        {

            $sql_table="CREATE TABLE contact_info(p_email varchar(100) PRIMARY KEY, p_name VARCHAR(50) NOT NULL,P_massage VARCHAR(1000)";
            if(mysqli_query($link,$sql_table))
            {
                $name=mysqli_real_escape_string($link,$_POST['Name']);
                $email=mysqli_real_escape_string($link,$_POST['Email']);
                $message=mysqli_real_escape_string($link,$_POST['Message']);

                $sql_insert="INSERT into contact_info values('$email','$name','$message')";
            }
        }
    }
?>
 