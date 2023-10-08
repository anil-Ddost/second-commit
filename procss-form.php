<?php
if(isset($_POST['send_message'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'dyumani';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `student` (`name`, `city`, `email`, `mobile`) VALUES ('$name', '$city', '$email', '$mobile')";
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!";
        echo "Thanku so much for Submmit the form!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
