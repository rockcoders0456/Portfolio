<?php
include './conn.php';
include './send.php';

if(isset($_POST['submit'])){
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


$insert = "INSERT INTO `data`(`name`, `phone`, `email`, `massage`)
 VALUES ('$name','$phone','$email','$message')";
 $query = mysqli_query($conn,$insert);
}


if($query){
    ?>
<script>
    alert("Message sent successfully");
</script>
<?php
}else{
    ?>
<script>
    alert("Message sending error!");
</script>
<?php
}

session_start();
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['message'] = $message;
?>