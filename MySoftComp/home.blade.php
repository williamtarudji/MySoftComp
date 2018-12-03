<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/style_home.css">
    <script src="js/main.js"></script>
    <title>MySoftComp</title>
</head>

<body>
<!-- Navigasi -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navigasi">
    <a class="navbar-brand" href="#"><img src="../image/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav text-center">
            <a class="nav-item nav-link" href="/">Home</a>
            <a class="nav-item nav-link" href="#fitur">How To</a>
            <a class="nav-item nav-link" href="#">Compare</a>
            <a class="nav-item nav-link" href="#">About</a>
        </div>
    </div>
</nav>
<!-- End Navigasi -->

<!-- Content -->
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">MySoftComp</h1>
        <h6 class="display-4 text-left intro">Merupakan website yang dapat membantu anda dalam memilih software yang sesuai kebutuhan anda</h6>
    </div>
    <button id="buttonCompare">COMPARE</button>
    <canvas id="myCanvas" width="500" height="500"></canvas>

</div>
<!-- End Jumbotron -->

<!-- Featurette -->
<div class="featurette" id="fitur">
    <div class="row featurette feat">
        <div class="col-md-6">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-1 imagefeat">
            <img src="../image/picture1.png" alt="" class="rounded">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette feat">
        <div class="col-md-3 imagefeat1">
            <img src="../image/picture1.png" class="rounded">
        </div>
        <div class="col-md-6 textmid">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

    </div>
    <hr class="featurette-divider">
    <div class="row featurette feat">
        <div class="col-md-6">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-1 imagefeat">
            <img src="../image/picture1.png" alt="" class="rounded">
        </div>

    </div>
</div>
<!-- End Featurette -->
<!-- End Content -->

<!-- Footer -->
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2018 MySoftComp</p>
</footer>



<!-- Optional JavaScript -->
<!--How To Slide Down-->
<script>
    $(function(){
        $('a[href*="#"]:not([href="#"])').click(function(){
            if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//'')&&location.hostname == this.hostname)
                {
            var target = $(this.hash);
            target=target.length?target:$('[name'+this.hash.slice(1)+']');
            if(target.length){
                $('html,body').animate({
                    scrollTop: target.offset().top
                },1000);
                return false;
                }
            }
        });
    });
    </script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body></html>
