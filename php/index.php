<!DOCTYPE html>
<html>
<head>
    <title>Fresh Threads - Home</title>
    <meta charset="UTF-8">
    <meta name="description" content="Buy t-shirts and clothing at Fresh Threads">
    <meta name="keywords" content="T-Shirts, Clothing, Shop, Fresh Threads">
    <meta name="author" content="Chris Eddy, Cody Bergin, Colton Askew, Jeevenn Sangara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Fresh Threads</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../php/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../php/shop.php">Shop</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
                Register
            </button>
            <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerTitle">Register for an Account</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="emailRegister" class="col-form-label">Email:</label>
                                    <input type="text" class="form-control" id="emailRegister">
                                </div>
                                <div class="form-group">
                                    <label for="passwordRegister" class="col-form-label">Password</label>

                                    <input type="text" class="form-control" id="passwordRegister">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            <button id="signInButton" type="button" class="btn btn-info" data-toggle="modal" data-target="#signIn">
                Sign-In
            </button>
            <div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signInTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="signInTitle">Sign-In to your Existing Account</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="emailSignIn" class="col-form-label">Email:</label>
                                    <input type="text" class="form-control" id="emailSignIn">
                                </div>
                                <div class="form-group">
                                    <label for="passwordSignIn" class="col-form-label">Password</label>

                                    <input type="text" class="form-control" id="passwordSignIn">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Sign-In</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</nav>
<div id="content">
    <img src="../images/logo.png" id="logo">
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