<?php
$conn = new mysqli("localhost", "root", "", "covid_test_management");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $test_id = $_POST['test_id'];
  $result = $_POST['result'];

  $sql = "UPDATE tests SET result='$result' WHERE id='$test_id'";

  if ($conn->query($sql) === TRUE) {
    echo "Test result updated successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
<form method="post" action="">
  Test ID: <input type="text" name="test_id"><br>
  Result: <select name="result">
    <option value="pending">Pending</option>
    <option value="negative">Negative</option>
    <option value="positive">Positive</option>
  </select><br>
  <input type="submit" value="Update Result">
</form>
