<!DOCTYPE html>
<html>
<head>
    <title>Fresh Threads - Shop</title>
    <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/shop.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../php/index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/shop.php">Shop</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Register</button>
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign-In</button>
        </form>
    </div>
</nav>
<div class="content">
    <div class="row" id="shopTools">
        <div class="btn-group" id="categoryButton">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">T-Shirts</a>
                <a class="dropdown-item" href="#">Pants</a>
                <a class="dropdown-item" href="#">Socks</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/blackT.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black T-Shirt</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add-to-Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/blackT.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black T-Shirt</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add-to-Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/blackT.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black T-Shirt</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add-to-Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/blackT.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black T-Shirt</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add-to-Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="row">
        <div class="col-4">
            <a href="https://github.com/ChrisEddy/ICS199Project">Github</a>
        </div>
        <div class="col-4">
            Fresh Threads &copy; 2018
        </div>
        <div class="col-4">
            Alpha v1
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>