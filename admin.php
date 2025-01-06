<?php 
    include'connection.php';
    session_start();
    $user_profile=$_SESSION['admin_name'];
    if($user_profile== false){
        header('location:adminlogin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin side</title>
    <style>
        h1{
            text-align: center;
            font-size: 50px;
        }
        table{
            margin: auto;
            width: 75%;
            border-collapse: collapse;
        }
        td{
            border: 2px solid black;
            border-collapse: collapse;
            width: 30%;
            text-align: center;
            font-size: 30px;
        }
        .data{
            width: 15%;
        }
        button{
            color: black;
            background-color: wheat;
        }
        #logout{
            position: absolute;
            top: 50px;
            right: 100px;
            height: 40px;
            width: 120px;
            font-size: 22px;
            color: #ECDFCC;
            background-color: #181C14;
            border: 2px solid grey;
            border-radius: 10px;
        }
        
        #logout:hover{
            color: #181C14;
            font-weight: bold;
            background-color: #ECDFCC;
            border: 3px solid #3C3D37;
        }
        #table{
            margin-top: 60px;
            height: 400px;
            overflow: auto;
            padding: 10px;
        }


    </style>
</head>
<body>
        
    <h1>Admin side of the website</h1>
    <button id="logout" onclick="location.href='logout.php'">log out</button>
    <div id="table">  
    <table>
            <tr>
                <td><b>Username</b></td>
                <td><b>Password</b></td>
                <td class="data"><b>Action</b></td>
                
            </tr>

            <?php

                $sql= "SELECT * from client";
                $result=mysqli_query($conn,$sql);
        
                $num=mysqli_num_rows($result);
                for($i= 0;$i<$num;$i++){
                    $row=mysqli_fetch_assoc($result);

                        echo"
                            <tr>
                                <td>" .$row["username"] ."</td>
                                <td>".$row["pass"] ."</td>
                                <td class='data'><a href='update.php?update_user=$row[username] & update_pass=$row[pass]'><button>EDIT</button></a>        
                                <a href='delete.php?delete_user=$row[username] & delete_pass=$row[pass]'><button>DELETE</button></a></td>
                            </tr>";
                    }
               
                

            ?>
    </table>
    </div>
</body>
</html>