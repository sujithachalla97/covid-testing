<?php
$conn = new mysqli("localhost", "root", "", "covid_test_management");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "INSERT INTO patients (name, email, phone) VALUES ('$name', '$email', '$phone')";

  if ($conn->query($sql) === TRUE) {
    echo "Patient registered successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
<form method="post" action="">
  Name: <input type="text" name="name"><br>
  Email: <input type="email" name="email"><br>
  Phone: <input type="text" name="phone"><br>
  <input type="submit" value="Register">
</form>
