<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css-file/Register.css">
    <title>Register-Form</title>
</head>
<body>
    <div class="main-box">
        <div class="support-div">
            <div class="box">
                
                <form method="POST">
                    <div class="heading">
                        <h1>Apply for Frontend Developer Post</h1>
                    </div>
                    <div class="form-box">
                        <input type="text" name="name" placeholder="Enter your Name">
                        <input type="text" name="quali" placeholder="Qualification">
                    
                        <input type="number" name="number" placeholder="Enter your Number" >
                        <input type="email" name="email" placeholder="Enter Email">
                    
                        <input type="text" name="ref" placeholder="Refrence">
                        <input type="text" name="job" placeholder="Job Profile">
                    </div>

                    <div class="btn">
                        <button name="register">Register</button>
                    </div>

                </form>
            </div>

            <div class="box2">
 
                <h1>Welcome</h1>

                <img src="./images.png" alt="">

                <p>Please fill all the details carefully. This form can change your life.</p>
                <button name="check" id="chechbtn"><a href="form.php">Check Form</a></button>
            </div>
        </div>
    </div>
    
</body>
</html>






<?php
 include 'connection.php';

if(isset($_POST['register'])){
    $Name= $_POST ['name'];
    $Quali= $_POST ['quali'];
    $Num= $_POST ['number'];
    $Email= $_POST ['email'];
    $Ref= $_POST ['ref'];
    $Job= $_POST ['job'];
    

    $insertQuery= "insert into jobregister (Name, Degree, Mobile, Email, Refer, Post) values('$Name', '$Quali', '$Num', '$Email', '$Ref', '$Job')";

    $result= mysqli_query($con, $insertQuery);

    if($result){
        ?>
        <script>
            alert('Form submitted');
        </script>
        <?php
    } else{
        ?>
        <script>
            alert('Technical issue after some times try again!');
        </script>
        <?php
    }
}

?>