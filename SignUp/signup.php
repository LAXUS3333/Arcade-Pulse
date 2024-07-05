<?php
if (isset($_POST['Sign-Up']))
{
    require 'database.php';

    $user=$_POST['uid'];
    $email=$_POST['mail'];
    $pass=$_POST['pwd'];
    $repeatpass=$_POST['pwd-repeat'];

    if (empty($user) || empty($email) || empty($pass) || empty($repeatpass) ) {
        header("Location:../Signup.php?error=emptyfield&uid=".$user."mail=".$email);
        exit();
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $user)) {
        header("Location:../Signup.php?error=invalidemail&uid&mail=".$email);
        exit();
    }


    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:../Signup.php?error=invalidemail&uid=".$user);
        exit();
    }

    else if (!preg_match("/^[a-zA-Z0-9]*$/", $user)) {
        header("Location:../Signup.php?error=invaliduser&mail=".$email);
        exit();
    }

    else if ($pass !== $repeatpass)
    {
        header("Location:../Signup.php?error=checkpassword&uid=".$user."mail=".$email);
        exit();


    }

    else{
        $sql= "SELECT uiDUsers FROM users WHERE uiDUsers=?";
        $stmt= mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../Signup.php?error=sqlerror");
            exit();
        }

        else{
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck=mysqli_stmt_num_rows($stmt);

            if ($resultCheck>0) {
                header("Location:../Signup.php?error=usertaken&uid=".$user."mail=".$email);
                exit();
            }

            else {
                $sql="INSERT INTO users(uidUsers,emailUsers,pwdUsers) VALUES(?,?,?)";
                $stmt= mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../Signup.php?error=sqlerror");
                    exit();
                }

                else {
                    $hashed=password_hash($pass, PASSWORD_DEFAULT);


                    mysqli_stmt_bind_param($stmt, "sss", $user,$email,$hashed);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../Login.php?signup=success");
                    exit();
                }


            }

        }



    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);




}
else {
    header("Location: ../Signup.php");
    exit();
}