<?php

 
 if(isset($_POST['submit']))
{
  $user = $_POST['text'];
    
  include"conn.php";
  $sql = "SELECT * FROM emp WHERE user='$user'";
  $data = mysqli_query($con,$sql)or die(mysqli_error());
  $num = mysqli_num_rows($data);
  if($num <1)
  {
    echo"wel come";
    $que  = "insert into emp values('$user')";
     if($data=mysqli_query($con,$que)or die(mysqli_error($con)))
     {
   echo "data inserted";
      }
   else
       {
 echo "<div style='position:absolute;top:650;left:400;color:red'><h2><b>data is not iserted</b></h2></div>";
       }
 }
 else{
    echo "name already exist";
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodni Admin page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        .bg{
           background-image: url("image/grayBack.jpg");
        }
    </style>
</head>
<body>

    <div class="main">

        <section class="signup" >
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="" id="signup-form" class="signup-form">
                        <h2 class="form-title">Ente some name</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="text" id="text" placeholder="Your Name" required />
                        </div>
                       <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="submit"/>
                        </div>
                    </form>
                    </p>
                </div>
            </div>
        </section>

    </div>
</body>
</html>