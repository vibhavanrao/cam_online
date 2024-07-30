
<html>
<head>
    
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Site CSS-->
    <link rel="stylesheet"  href="css/style.css">

    <!--Bootstrap Linking-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="scripts/contact.js"></script>

    <!--Font Awesome Icons-->
    <script src="https://kit.fontawesome.com/1121f3dff9.js"></script>
    
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    
</head>

<body style="background-image: url(../images/Backgrounds/bg8.jpg);background-repeat: no-repeat;background-size: cover;">
<?php

    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $comment =$_POST['contact_comment'];

    $conn = mysqli_connect('localhost','id15796857_admin','CamOnline@1krify','id15796857_camonline');
    if(!$conn)
    {
        die('Connection Failed '. mysqli_connect_error());
    }
    else
    {
        $SELECT= "SELECT * FROM  contact WHERE email = '$email'";
        $select1=mysqli_query($conn,$SELECT);
        
        $count=mysqli_num_rows($select1);
        // echo $count;
        if($count==0){
            $INSERT="INSERT INTO contact(name,email,comment) values('$name','$email','$comment')";
            $insert1=mysqli_query($conn,$INSERT);
            if($insert1){
                echo '
                <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
                    <center>
                    <h1 style="font-family: monospace;">Thank You For your Message !</h1>
                    </center>
                </div>';
            }
            else{
                echo '
                <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
                    <center>
                    <h1 style="font-family: monospace;">Message already received !</h1>
                    </center>
                </div>';
            }

        }
    }
    mysqli_close($conn);
?>
</body>
</html>