<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $emailid = $_POST['email'];


        $sql = "insert into login(username,password,firstname,lastname,emailid) values('$username','$password','$firstname','$lastname','$emailid');";  
        $result = mysqli_query($conn, $sql);  
        header("Location: index.php");
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: main.html");
        }  
        else{  
            echo  '<script>
                        window.location.href = "index.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>