<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>CFLMS-CodeReview10 - Library Database - Create </title>
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

            <h1 class="display-4 t1">Donate 90s Media</h1>

         </div>
    </div>

    <div class="container-fluid mx-4 p-4">

    
<?php 
	require_once 'db_connect.php';

	if($_POST){
		$media_type= $_POST["media_type"];
		$title= $_POST["title"];
		$author= $_POST["author"];
		$description= $_POST["description"];
		$genere= $_POST["genere"];
		$publish_year= $_POST["publish_year"];
		$publisher= $_POST["publisher"];
		$image= $_POST["image"];
		$isbn= $_POST["isbn"];

		$sql= "INSERT INTO `media`(`media_type`, `title`, `author`, `description`, `genere`, `publish_year`, `publisher`, `image`, `isbn`) VALUES ('$media_type', '$title', '$author', '$description', '$genere', '$publish_year', '$publisher', '$image', '$isbn')";

		if(mysqli_query($conn, $sql)){
			echo "<h1 class='t2'>Success! Thanks for adding to our Library!</h1>
			<div class='c2'><a href='../index.php'>Back to the home page</a></div>
			";
		}else {
			echo "error";
		}

		$conn->close();
	}
?>

</div>
<nav class="navbar d-flex justify-content-around b2">
        <a class="navbar-brand c1" href="http://localhost/CFLMS-codereview10-Schedler/index.php">The Public Library</a>
        <span class="c3">CodeFactory 2020 - Rebecca Schedler</span>          
 </nav>
</body>
</html>