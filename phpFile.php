<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {      
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo "First Name: " . htmlspecialchars($firstName)."<br>";
echo "Last Name: " . htmlspecialchars($lastName)."<br>";
echo "Email: " . htmlspecialchars($email)."<br>";
echo "Message: " . htmlspecialchars($message)."<br>";
}
?>

