
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

<body style="background-image: url(../images/Backgrounds/bg9.jpg);background-repeat: no-repeat;background-size: cover;">
    <?php

    $email=$_POST['login_email'];
    $password=$_POST['login_pass'];

   $conn = mysqli_connect('localhost','admin','','test1');
    if(!$conn)
    {
    die('Connection Failed '. mysqli_connect_error());
    }
    else
    {
    $SELECT="select * from registration where email='$email' && password='$password'";
    $select1=mysqli_query($conn,$SELECT);
    $count1=mysqli_num_rows($select1);
    $SELECT="select * from address where email='$email'";
    $select2=mysqli_query($conn,$SELECT);
    $count2=mysqli_num_rows($select2);
    if($count1==1 && $count2==1) 
    {
        echo '
        <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
            <center>
            <h1 style="font-family: monospace;">Login Successful</h1>
            <button style="background-color: orange;font-weight: 600;font-size: medium;"><a href="../shop.html" style="color: white; text-decoration: none;">Shop</a></button>
            </center>
        </div>';
    }
    else if($count1==1 && $count2==0)
    {
        echo '
        <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
            <center>
            <h1 style="font-family: monospace;">Login Successful ! Add Address and shop</h1>
            <button style="background-color: orange;font-weight: 600;font-size: medium;"><a href="../address.html" style="color: white; text-decoration: none;">ADD</a></button>
            </center>
        </div>';
    }
    else
    {
        echo '
        <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
            <center>
            <h1 style="font-family: monospace;">Check Your Mail and Password</h1>
            </center>
        </div>';;
    }
    }
    ?>
</body>
</html>