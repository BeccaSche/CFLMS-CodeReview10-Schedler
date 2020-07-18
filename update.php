<?php 
	require_once 'actions/db_connect.php';
	if($_GET["id"]){
		$id = $_GET["id"];

		$sql = "SELECT * FROM media WHERE id=$id";
		$result = mysqli_query($conn, $sql);

		$row = $result->fetch_assoc();

		$conn->close();
	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>CFLMS-CodeReview10 - Library Database - Update </title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid b1">
        <div class="container py-3">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand"><span class="c1">Public Library</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link c2 px-3" href="http://localhost/CFLMS-codereview10-Schedler/index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link c2 px-3" href="http://localhost/CFLMS-codereview10-Schedler/create.php">Add Media</a>
                 </li>
                </ul>
                </div>
            </nav>

            <h1 class="display-4 t1">Update 90s Media</h1>

         </div>
    </div>

    <div class="container-fluid mx-4 p-4">

    <h1 class="t2">Keep our 90s Media Library updated!</h1>

 	<form action="actions/a_update.php" method="post">
 	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <input type="text" name="media_type" value="<?php echo $row['media_type'] ?>"><br>
    <input type="text" name="title" value="<?php echo $row['title'] ?>"><br>
    <input type="text" name="author" value="<?php echo $row['author'] ?>"><br>
    <input type="text" name="description" value="<?php echo $row['description'] ?>"><br>
    <input type="text" name="genere" value="<?php echo $row['genere'] ?>"><br>
    <input type="text" name="publish_year" value="<?php echo $row['publish_year'] ?>"><br>
    <input type="text" name="publisher" value="<?php echo $row['publisher'] ?>"><br>
    <input type="text" name="image" value="<?php echo $row['image'] ?>"><br>
    <input type="text" name="isbn" value="<?php echo $row['isbn'] ?>"><br>
    <input type="submit" name="submit">
    </form>


 </div>
 <nav class="navbar d-flex justify-content-around b2">
        <a class="navbar-brand c1" href="http://localhost/CFLMS-codereview10-Schedler/index.php">The Public Library</a>
        <span class="c3">CodeFactory 2020 - Rebecca Schedler</span>          
 </nav>
 </body>
 </html>

 <?php
}
?>
