<?php include'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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

           $delete_user= $_GET['delete_user'];
           $delete_pass= $_GET['delete_pass'];

    ?>
    <h1>Delete User</h1>
    <form method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><?php echo $delete_user;?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><?php echo $delete_pass;?></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="delete" value="DELETE"></td>
            </tr>
        </table>
    </form>
    <?php
        if (isset($_POST['delete'])) {

            $sql="DELETE FROM client WHERE username='$delete_user' ";
            $result=mysqli_query($conn,$sql);
            if ($result==false) {
                echo "<script>alert('error');</script>";
            }else{
                echo "<script>
                        alert('User deleted successfully');
                        window.location.href = 'admin.php';
                    </script>";
            }
        }
    ?>
    
</body>
</html>