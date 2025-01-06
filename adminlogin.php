<?php 

    session_start();
    include'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Log in</title>
    <style>
         h1{
            text-align: center;
            margin-top: 50px;
            font-size: 50px;
        }
        table{
            width: 60%;
            margin: auto;
            margin-top: 100px;
        }
        td{
            width: 50%;
            font-size: 30px;
            font-weight: 600;
            text-align: center;
            padding: 20px;
        }
        input{
            font-size: 20px;
            font-weight: 300;
            padding: 5px;
        }

        #signin{
            text-decoration: none;
            color: purple;
            font-size: 18px;
            
            
        }
        #signin:hover{
            color: blue;
            font-size: 19px;
        }
        #div{
            width: 90%;
            margin: auto;
            text-align: center;
        }
        body{
            background-color: #F9F9E0;
        }
        #button{
            background-color: #003161;
             border-radius: 25px;
             width: 150px;
             color: #FFF4B7;
        }
        #button:hover{
            background-color: #DEAA79;
            color: #000B58;
            font-weight: 500;
            font-size: 19px;
        }

    </style>
</head>
<body>
    
    <h1>Admin login</h1>
        <form method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Enter username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Enter password" required></td>
            </tr>
            <tr>
                <td colspan="2"><input id="button" type="submit" name="submit" value="Log In"></td>
            </tr>
        </table>
        </form>
        <div id="div">
            <a href="login.php" id="signin">Log in as a user</a>
        </div>
        <?php
        if(isset($_POST["submit"])){
            $admin_username=$_POST["username"];
            $admin_password=$_POST["password"];
            $sql="SELECT * from admins WHERE username='$admin_username' && pass='$admin_password'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_num_rows($result);
            if($row==1){
                $_SESSION['admin_name']=$admin_username;
                header('location:admin.php');
            }
            else{
                echo "<script>alert('Login Failed');</script>";
            }
        }
        ?>
    
</body>
</html>