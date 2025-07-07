<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Style.css">

</head>

<body>
    <?php

    include 'conn.php';
    $ids = $_GET['id'];
    $select = "SELECT * FROM `data` WHERE id = $ids";
    $query = mysqli_query($conn, $select);
    $result = mysqli_fetch_assoc($query);

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $update = "UPDATE `data` SET `name`='$name',`phone`='$phone',`email`='$email',`massage`='$message' WHERE id = '$ids'";
        $result = mysqli_query($conn, $update);
        if ($result) {
    ?>
            <script>
                alert('Update Successfully👍👍');
                window.location.href = 'view.php';
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Error❌❌❌');
            </script>
    <?php
        }
    }
    ?>
    <section id="third" class="third text-center m-5">
        <div class="container top rounded" data-aos="flip-left" data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form">
                        <form action="" method="post" name="myForm" enctype="multipart/form-data" onsubmit="return formValidate()">
                            <h1>Contact Form</h1>
                            <input type="text" name="name" placeholder="Your name" value="<?php echo $result['name']; ?>"><br>
                            <input type="number" name="phone" placeholder="Your Phone" value="<?php echo $result['phone']; ?>"><br>
                            <input type="email" name="email" placeholder="Your e-mail" value="<?php echo $result['email']; ?>"><br>
                            <textarea name="message" id="" cols="10" rows="3" placeholder="Message (opational)"><?php echo $result['massage']; ?></textarea>
                            <button type="submit" value="submit" name="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../JS/script.js"></script>

</body>

</html>