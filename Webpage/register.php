<?php
$email = $_POST['email'];
$username = $_POST['Username'];
$Mobileno = $_POST['Mobileno'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
if (!empty($email) || !empty($Username) || !empty($Mobileno) || !empty($password) || !empty($password2)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finalchatbot";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From login Where email = ? Limit 1";
     $INSERT = INSERT INTO `login` (`id`, `email`, `Username`, `Mobileno`, `password`, `password2`) VALUES ('?', '?', '?', '?', '?', '?');
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $email, $Username, $Mobileno, $password, $password2);
      $stmt->execute();

      header("location:Chatbot.html");
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>