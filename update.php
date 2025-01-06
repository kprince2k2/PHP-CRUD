<?php include'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    </style>
</head>
<body>
    <?php 
        include'connection.php';

           $update_user= $_GET['update_user'];
           $update_pass= $_GET['update_pass'];

    ?>
    <h1>Update The Data</h1>
    <form method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $update_user;?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="<?php echo $update_pass;?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));
            

            $sql="UPDATE client SET username='$username' , pass='$password' WHERE username='$update_user' ";
            $result=mysqli_query($conn,$sql);
            if ($result==false) {
                echo "<script>alert('error');</script>";
            }else{
                echo "<script>alert('record updated sucessfully');
                window.location.href = 'admin.php';
                </script>";
            }
        }
    ?>
    
</body>
</html>