<?php

function addToArray($arr, $data)
{
    if(isset($data) && isset($arr)){

        foreach($data as $key=>$value){

            switch ($key) {
                case 'email':
                    filter_var($value, FILTER_VALIDATE_EMAIL) ?
                    $arr['email'] = 'Email : '.$value.'</br>' :
                    $arr[ 'emailErr'] = ' Email is INVAILID email format ! </br>';

                    break;
                case 'password':
                    preg_match("/^[a-zA-z0-9]{5,}$/", $value) ?
                    $arr['password'] = 'Password : '.validateInput($value).'</br>' :
                    $arr[ 'passwordErr'] = 'Password only has letters >=5 character and no white space allowed !</br>';
                
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
    $data=isset($_POST)?$_POST:false;
    $arr=array();
    $result =addToArray($arr, $data);

    foreach($result as $row)
    {
         echo $row;
    }

} else {
    echo "GET METHOD";

}
