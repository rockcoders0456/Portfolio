<?php

include 'conn.php';
$select = "SELECT * FROM `data`";
$query = mysqli_query($conn, $select);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Massage</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <th scope="row"> <?php echo $result['id']; ?> </th>
                    <td><?php echo $result['name']; ?></td>
                    <td><?php echo $result['phone']; ?></td>
                    <td><?php echo $result['email']; ?></td>
                    <td><?php echo $result['massage']; ?></td>
                    <td class="text-center"><a href="update.php?id=<?php echo $result['id'];?>"><i class="fa-solid fa-pen-to-square" style="color: #005eff;"></i></a></td>
                    <td class="text-center"><a href="delete.php?id=<?php echo $result['id'];?>"><i class="fa-solid fa-trash" style="color: #005eff;"></i></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>