<?php

/*
*CREATE DATABASE account;
*CREATE TABLE user (
    uId int(50) NOT NULL PRIMARY_KEY AUTO_INCREMENT,
    uEmail varchar(255),
    uPassWord varchar(255)
)ENGINE=Innob
*
*/

function addToArray($arr, $data)
{
    if(isset($data) && isset($arr)){

        foreach($data as $key=>$value){

            switch ($key) {
                case 'email':
                    filter_var($value, FILTER_VALIDATE_EMAIL) ?
                    $arr['email'] =$value:
                    $arr[ 'emailErr'] = ' Email is Invalid email format !';

                    break;
                case 'password':
                    preg_match("/^[a-zA-z0-9]{5,}$/", $value) ?
                    $arr['password'] =validateInput($value) :
                    $arr[ 'passwordErr'] = 'Password only has letters >=5 character and no white space allowed !';
                
                    break;
            } 
    }
    

    }

    return $arr;

}

function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $conn=mysqli_connect("localhost","root",'');

    if (!$conn)
    {
        die("Connection failed : " . mysqli_connect_error());
    }

    $data=isset($_POST)?$_POST:false;
    $arr=array();
    $arr =addToArray($arr, $data);

    foreach($arr as $key =>$value){
        if(preg_match("/Err$/",$key)){
            die("The Password or Email not availble !");
        }
    }

    $sql="SELECT uID FROM account.user WHERE uEmail ='".$data['email']."' AND uPassWord ='".$data['password']."';";
    $query=mysqli_query($conn,$sql);

    if($result=mysqli_fetch_array($query)){
        
        echo "<b>Email and Password Succesfully !</b>";
    }else{
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      
    }

    $conn->close();

} else {
    echo "CAN NOT USE GET METHOD !";  
}


