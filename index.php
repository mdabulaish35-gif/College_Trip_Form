<?php

session_start();

if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip";

    $con = mysqli_connect($server, $username, $password, $database);

    if(!$con){
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `trip`
    (`Name`, `Age`, `Gender`, `Email`, `phone`, `Other`, `Date`)
    VALUES
    ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

    if($con->query($sql) == true){

        $_SESSION['success'] = "Thanks For Submitting Your Form. We Are Happy To See You Joining Us For Darjeeling Trip";

        header("Location: index.php");
        exit();
    }
    else{
        echo "ERROR: " . $con->error;
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>travel form</title>
    <link rel="stylesheet" href="project.css">
</head>

<body>
    <img class="bg" src="jis.png" alt="JIS college of engineering image">
    <div class="container">

        <h1>Welcome to JIS College Of Engineering Darjeeling Trip Form</h1>

        <p>Enter Your Details To Confirm Your Participation in the trip</p>

        <?php

    if(isset($_SESSION['success'])){

        echo "<p class='submitMsg'>" . $_SESSION['success'] . "</p>";

        unset($_SESSION['success']);
    }

    ?>

        <form action="index.php" method="post">

            <input type="text" name="name" placeholder="Enter Your name">

            <input type="number" name="age" placeholder="Enter Your age">

            <input type="text" name="gender" placeholder="Enter Your gender">

            <input type="email" name="email" placeholder="Enter Your email">

            <input type="tel" name="phone" placeholder="Enter Your phone number">

            <textarea name="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>

            <button class="btn">Submit</button>

        </form>

    </div>
    <script src="project.js"></script>
</body>

</html>