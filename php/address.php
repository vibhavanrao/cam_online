
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

    $name=$_POST['aname'];
    $email=$_POST['aemail'];
    $street=$_POST['sname'];
    $city=$_POST['city'];
    $phone=$_POST['pno'];
    $pincode=$_POST['pin'];

    $conn = mysqli_connect('localhost','id15796857_admin','CamOnline@1krify','id15796857_camonline');
    if(!$conn)
    {
    die('Connection Failed '. mysqli_connect_error());
    }
    else
    {
    $SELECT="select * from address where email='$email'";
    $select1=mysqli_query($conn,$SELECT);
    $count=mysqli_num_rows($select1);
    if($count==0)
    {
        $INSERT="INSERT INTO address(name,email,street,city,phone,pincode) values('$name','$email','$street','$city','$phone','$pincode')";
        $insert1=mysqli_query($conn,$INSERT);
        if($insert1)
        {
            echo '
            <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
                <center>
                <h1 style="font-family: monospace;">Address Saved</h1>
                <button style="background-color: orange;font-weight: 600;font-size: medium;">
                    <a href="../shop.html" style="color: white; text-decoration: none;">Shop</a>
                </button>
                </center>
            </div>';
        }
        else
        {
            echo '
            <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
                <center>
                <h1 style="font-family: monospace;">Error Occured</h1>
                <button style="background-color: orange;font-weight: 600;font-size: medium;"><a href="../address.html" style="color: white; text-decoration: none;">Try Again</a></button>
                </center>
            </div>';
        }
    }
    else
    {
        echo '
        <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
            <center>
            <h1 style="font-family: monospace;">Address already Saved !</h1>
            </center>
        </div>';;
    }
    }
    ?>
</body>
</html>