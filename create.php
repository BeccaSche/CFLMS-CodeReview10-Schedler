<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
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

    <h1 class="t2">Donate 90s Media and add it to the Library:</h1>

	 <form action="actions/a_create.php" method="post" class="p-2">
	    <div>
	    	<h5>Media-type: (book, CD or VHS)</h5>
	    	<input type="text" name="media_type" placeholder="Book, CD or VHS">
	    </div>
	    <div>
	    	<h5 class= "mt-3">Title of the Media:</h5>
	    	<input type="text" name="title">
	    </div>
	    <div>
	    	<h5 class= "mt-3">Author, Band, Interpret or Director:</h5>
	    	<input type="text" name="author">
	    </div>
	    <div>
	    	<h5 class= "mt-3">Short description:</h5>
	    	<input type="text" name="description" placeholder="eg. what is more 90s?">
	    </div>
	    <div>
	    	<h5 class= "mt-3">Genre</h5>
	    	<input type="text" name="genere" placeholder="eg. Fantasy Drama">
	    </div>
	    <div>
	    	<h5 class= "mt-3">Year of Publication</h5>
	    	<input type="text" name="publish_year" placeholder="eg. 1992">
	    </div>
	    <div>
	    	<h5 class= "mt-3">Publisher, Record Lable or Production Company:</h5>
	    	<input type="text" name="publisher" placeholder="eg. Random House">
	    </div>
	    <div>
	    	<h5 class= "mt-3">Image URL</h5>
	    	<input type="text" name="image" placeholder="https://images-4567.jpg">
	    </div>
	    <div>
	    	<h5 class= "mt-3">ISBN</h5>
	    	<input type="text" name="isbn" placeholder="ISBN">
	    </div>

	    <input type="submit" name="submit" class="btn btn-warning my-3">
	 </form>

	</div>
	<nav class="navbar d-flex justify-content-around b2">
        <a class="navbar-brand c1" href="http://localhost/CFLMS-codereview10-Schedler/index.php">The Public Library</a>
        <span class="c3">CodeFactory 2020 - Rebecca Schedler</span>          
    </nav>
</body>
</html>
