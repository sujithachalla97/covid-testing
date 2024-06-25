<?php
$conn = new mysqli("localhost", "root", "", "covid_test_management");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $patient_id = $_POST['patient_id'];
  $test_date = $_POST['test_date'];

  $sql = "INSERT INTO tests (patient_id, test_date, result) VALUES ('$patient_id', '$test_date', 'pending')";

  if ($conn->query($sql) === TRUE) {
    echo "Test scheduled successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
<form method="post" action="">
  Patient ID: <input type="text" name="patient_id"><br>
  Test Date: <input type="date" name="test_date"><br>
  <input type="submit" value="Schedule Test">
</form>
