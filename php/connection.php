<html>
    <head>
        
        <title>Register Page</title>
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

    <body style="background-image: url(../images/Backgrounds/bg7.jpeg);background-repeat: no-repeat;background-size: cover;">
    
    <?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $conpass = $_POST['conpass'];
 
       $conn = mysqli_connect('localhost','id15796857_admin','CamOnline@1krify','id15796857_camonline');
        if(!$conn)
        {
            die('Connection Failed '. mysqli_connect_error());
        }
        else
        {
            $SELECT= "SELECT * FROM  registration WHERE email = '$email'";
            $select1=mysqli_query($conn,$SELECT);
            
            $count=mysqli_num_rows($select1);
            // echo $count;
            if($count==0){
                 $INSERT="INSERT INTO registration(name,email,password,conpass) values('$name','$email','$password','$conpass')";
                 $insert1=mysqli_query($conn,$INSERT);
                 if($insert1){
                    echo  '
                    <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
                        <center>
                        <h1 style="font-family: monospace;color:white;">Registration Successful</h1>
                        <button style="background-color: orange;font-weight: 600;font-size: medium;"><a href="../address.html" style="color: white; text-decoration: none;">SHOP</a></button>
                        </center>
                    </div>';
                 }
                 else{
                    echo '<div style="display: flex;justify-content: center;align-items: center;height: 100%;">
                    <cent er>
                    <h1 style="font-family: monospace;color:white;">Registration Failed</h1>
                    </center>
                </div>';
                 }

            }
            else{
                echo '<div style="display: flex;justify-content: center;align-items: center;height: 100%;">
                <center>
                <h1 style="font-family: monospace;color:white;">User Already Exists !</h1>
                </center>
            </div>';;
            }    
      }
      mysqli_close($conn);
    ?>
    </body>
</html>