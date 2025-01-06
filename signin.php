<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
         h1{
            text-align: center;
            margin-top: 40px;
            font-size: 55px;
            color: #000B58;
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
        #login{
            text-decoration: none;
            color: blue;
            font-size: 18px;
            
            
        }
        #login:hover{
            color: purple;
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
    <?php include'connection.php';?>
    <h1>PHP Project</h1>

        <form method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="user" placeholder="Enter username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" placeholder="Enter password" required></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="cpass" placeholder="Confirm password" required></td>
            </tr>
            <tr>
                <td colspan="2"><input id="button" type="submit" name="submit" value="Sign In"></td>
            </tr>
        </table>
        </form>

        <div id="div">
            <a href="login.php" id="login">Already have an account?log in</a>
        </div>
        

        <?php

            //sql part
            if(isset($_POST["submit"])){
                $user=$_POST["user"];
                $pass=$_POST["pass"];
                $cpass=$_POST["cpass"];
                if($pass===$cpass){

                    $sql="INSERT INTO client VALUES('$user','$pass')";
                    $result=mysqli_query($conn,$sql);
                    if($result==false){
                        echo"<script>
                            alert('can't insert the data');
                        </script>";
                    }
                    else{
                        echo"<script>
                            alert('record inserted sucessfully');
                        </script>";
                    }
                }
                else{
                    echo "<script>alert('confirmation password does not match');</script>";
                }

                    
                
            }
        

        
        
        


        
    ?>
    
</body>
</html>