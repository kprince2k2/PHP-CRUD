<?php
        $servername="localhost";
        $username= "root"; 
        $password= ""; 
        $dbname= "crud";

        $conn= new mysqli($servername,$username,$password,$dbname);

        if(! $conn)
        {
            echo "can't connect to the database";
        }
        
        ?>