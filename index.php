<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>News</title>
</head>
<body>
<?php
    $contact="Контакти";
?>

<?php include "navbar.php"; ?>

<div class="container">
    <h1>News</h1>

    <a href="/create.php" class="btn btn-success">Add new</a>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Images</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $conn = new PDO("mysql:host=localhost;dbname=localhostpu911", "root","");
            $reader = $conn ->query("SELECT * FROM `news`");
            foreach ($reader as $row){
                echo"
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['description']}</td>
                    <td>
                    <img src='/images/{$row['image']}' alt='manul' width='150' />                     
                    </td>
                    <td>
                        <a href='#' class='btn btn-success btnEdit' data-id='{$row['id']}'>Edit</a>
                        <a href='#' class='btn btn-danger btnDelete' data-id='{$row['id']}'>Delete</a>                        
                     </td>
                </tr>
                ";
            }
        ?>

        </tbody>
    </table>

</div>
<?php include "modal_delete.php";?>

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/axios.min.js></script>
</body>
</html>