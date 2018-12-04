<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/particles.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>

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
            <a class="nav-item nav-link" href="/compare.blade.php">Compare</a>
            <a class="nav-item nav-link" href="#">About</a>
        </div>
    </div>
</nav>
<!-- End Navigasi -->

<!-- Content -->
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="categoryBox">
            <select class="selectBox">
            <option value="0">Pilih Kategori</option>
            <option value="1">Office</option>
            <option value="2">System Operasi</option>
            <option value="3">Video Editing</option>
            </select>
        </div>
        <div class="itemBox">
            <form action="/" method="GET">
                <input class="itemBox1" type="text" placeholder="Software1..." name="item1">
                <button type="submit">Find</button>
                <input class="itemBox2" type="text" placeholder="Software2..." name="item2">
                <button type="submit">Find</button>
            </form>
        </div>
        {{--@if(count($result)!=0)--}}
            {{--<table>--}}
                {{--<td>--}}
                    {{--<tr>--}}
                        {{--Fitur1--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--Fitur2--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--Fitur3--}}
                    {{--</tr>--}}
                {{--</td>--}}
                {{--@foreach()--}}
                    {{--<tr>--}}
                        {{--<td>{{$pet->name}}</td>--}}
                        {{--<td>{{$pet->type->type}}</td>--}}
                        {{--type pertama mengambil tabel type dari pet , yg kedua mengambil kolom type di dalam type--}}
                        {{--<td>{{$pet->gender}}</td>--}}

                    {{--</tr>--}}
                {{--@endforeach--}}
            {{--</table>--}}
        {{--@else--}}
            {{--DATA NOT FOUND!--}}
        {{--@endif--}}
    </div>
</div>

<!-- Footer -->
<footer class="my-5 pt-5 text-muted text-center text-small Compare">
    <p class="mb-1">© 2018 MySoftComp</p>
</footer>



<!-- Optional JavaScript -->
{{--ButtonCompare--}}
<script src="js/anime.min.js"></script>
<script src="js/particles.js"></script>
<script src="js/demo.js"></script>
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
