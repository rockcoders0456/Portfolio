<?php
$server = "localhost";
$user = "root";
$password = "";
$dataBase = "portfolio";

$conn = mysqli_connect($server,$user,$password,$dataBase);


if($conn){
    ?>
    <!-- <script>
        alert("Database Connected!");
    </script> -->
    <?php
}else{
?>
<!-- <script>
    alert("Database Connection error");
</script> -->
<?php
}
?>