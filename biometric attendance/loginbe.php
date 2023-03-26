<?php
session_start();
include "connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($user)) {
        header("Location: index.php?error=Username is required");
        exit();


    }else if(empty($pass)) {
        header("Location: index.php?error=Username is required");
        exit();

    }else {
        $sql = "SELECT * from users where username='$user' AND password ='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $user && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['ID'] = $row['ID'];

                header("Location: home.php");
                 exit();

            }else{
                header("Location: index.php?error=Incorrect Credentials");
                 exit();
            }

            print_r($row);
        }else{
            header("Location: index.php?error=Incorrect Credentials");
             exit();
        }
    }
    
}   
else {
    header("Location: index.php");
    exit();
}

?>  