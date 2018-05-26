<?php
function connectDatabase($serverName = "localhost", $userName = "root", $password = "")
{
    $conn = new mysqli($serverName, $userName, $password);
    if ($conn->connect_error) {
        return die("Connection failed : " . $conn->connect_error);
    }
    return $conn;
}
