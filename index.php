<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>CFLMS-CodeReview10 - Library Database and HP </title>
</head>

<body>
    
    <div class="jumbotron jumbotron-fluid b1">
        <div class="container py-5">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand"><span class="c1">Public Library</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link c2 mx-3" href="http://localhost/CFLMS-codereview10-Schedler/index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link c2 mx-3" href="http://localhost/CFLMS-codereview10-Schedler/create.php">Add Media</a>
                 </li>
                </ul>
                </div>
            </nav>

            <h1 class="display-4 t1">THE 90s RETRO LIBRARY</h1>
        </div>
    </div>

    <div class="container-fluid px-3">
        <div class='row d-flex justify-content-around'>
       
            
    <?php 
        include ("actions/db_connect.php");

        $sql = "SELECT * FROM media";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows == 0){
            echo "No result";
        }else{
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $key => $value) {
              echo "<div class='card col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 m-1' style='width: 18rem;'>
                    <img src='".$value["image"]."' class='card-img-top'>
                    <div class='card-body'>
                        <div><small class='d-flex justify-content-between'>
                            <span>". $value["media_type"]." </span><span>". $value["genere"]."</span>
                        </small></div>
                        <h5 class='card-title my-0'>". $value["title"]. "</h5>
                        <div class='mb-1'><small class='font-weight-bold'>by ". $value["author"]."</small></div>
                        <p class='card-text'>". $value["description"]."</p>
                        <div><small class='font-weight-bold'>Year: ". $value["publish_year"]."</small></div>
                        <div><small>". $value["publisher"]."</small></div>
                        <div><small>ISBN: ". $value["isbn"]."</small></div>
                        <div class='my-2 d-flex justify-content-between'>
                            <a href='update.php?id=".$value["id"]."' class='btn btn-warning'>Update</a> 
                            <a href='delete.php?id=".$value["id"]."' class='btn btn-danger'>Delete</a><br>
                        </div>
                    </div>
                    </div>
                    
                    ";
            }
        }
    ?>


        </div>
    </div>
    <nav class="navbar d-flex justify-content-around b2 mt-3">
        <a class="navbar-brand c1" href="http://localhost/CFLMS-codereview10-Schedler/index.php">The Public Library</a>
        <span class="c3">CodeFactory 2020 - Rebecca Schedler</span>          
    </nav>

    </body>
</html>