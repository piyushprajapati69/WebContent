<?php
        $con=mysqli_connect('localhost','root','','first');
        if(isset($_POST['log']))
        {
            $mail=$_Post['Email'];
            $pass=$_Post['Password'];
            $query="insert into administrator_login(Email,Password) values ('$mail','$pass')";
            $run=mysqli_query($von,$query);
        }
        ?>