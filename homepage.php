<?php
    include("connection.php");
    session_start();
    $user_profile=$_SESSION['user_name'];
    if($user_profile== false){
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
        #logout{
            position: absolute;
            top: 60px;
            right: 100px;
            height: 40px;
            width: 120px;
            font-size: 22px;
            color: blue;
            background-color: lightblue;
            border: 1px solid grey;
        }

    </style>
</head>
<body>
    
    <h1>Homepage</h1>
    <button id="logout" onclick="location.href='logout.php'">log out</button>
        <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Roll Number</td>
                <td><input type="number" name="rno" placeholder="Enter Roll number" required></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname" placeholder="Enter first name" required></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname" placeholder="Enter last name" required></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="number" name="pno" placeholder="Enter contact number" required></td>
            </tr>
            <tr>
                <td>Email Id</td>
                <td><input type="email" name="mailid" placeholder="Enter mail id" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
            </tr>

        </table>
        </form>
        
        
    <?php
    if(isset($_POST['submit'])){

        $rno=$_POST['rno'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $pno=$_POST['pno'];
        $mailid=$_POST['mailid'];

        $sql="INSERT INTO users VALUES('$rno','$fname','$lname','$pno','$mailid','$user_profile')";
        $result=mysqli_query($conn,$sql);
        if($result==true){
            echo"<script>alert('record inserted sucessfully');</script>";
        }else{
            echo"<script>alert('failed');</script>";
        }
        

        

    } 
        
    ?>
</body>
</html>