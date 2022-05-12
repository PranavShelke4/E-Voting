<?php      
        include('connection.php');  
        
        if(isset($_POST['submit'])){
          $user=$_POST['user'];
          $pass=$_POST['pass'];
          $sql="SELECT * FROM `voterlogin` WHERE `username`='".$user."' AND `password`='".$pass."'";
          $aa=mysql_query($sql);
          $cont=mysql_num_rows($aa);
          echo "=".$cont;
          if($cont>=1){
                 echo "<script> alert('Logged in Successfully....'); </script>";
                 //echo "<script> window.location.href='dashboard.php'; </script>";
              }
              else{
                echo "<script> alert('Plese check password and username....'); </script>";
                //echo "<script> window.location.href='../login.html'; </script>";
              }
          }
                // Set session variables
            $_SESSION["user"] = "$user";
            //echo "Session variables are set.";
      ?>