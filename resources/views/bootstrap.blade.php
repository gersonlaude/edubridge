<html>
<head>
    <title>Belajar Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Logo</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Dropdown link
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </li>
    </ul>
</nav>

<div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Column 1</h3>
            <p>Lorem Ipsum</p>
        </div>
        <div class="col-sm-4">
            <h3>Column 2</h3>
            <p>Lorem Ipsum</p>
        </div>
        <div class="col-sm-4">
            <h3>Column 3</h3>
            <p>Lorem Ipsum</p>
        </div>
    </div>
</div>

<div class="container">
    <h1>Container</h1>
</div>

<div class="container-fluid">
    <h1>Container Fluid</h1>
</div>

<div class="container p-3 my-3 border"></div>
<div class="container p-3 my-3 bg-primary text-white">af</div>


<div class="container-sm border">container small</div>
<div class="container-md border">container medium</div>
<div class="container-lg border">container large</div>

<div class="row">
    <div class="col-sm-2 border">2</div>
    <div class="col-sm-10 border">10</div>
</div>
<div class="row">
    <div class="col-md-4 border">4</div>
    <div class="col-sm-8 border">8</div>
</div>
<div class="row">
    <div class="col-sm-6 border">6</div>
    <div class="col-sm-6 border">6</div>
</div>

<div class="row">
    <div class="col bg-dark text-white">col 1</div>
    <div class="col bg-dark text-white">col 2</div>
    <div class="col bg-dark text-white">col 3</div>
    <div class="col bg-dark text-white">col 4</div>
    <div class="col bg-dark text-white">col 5</div>
</div>

<div class="row">
    <div class="col-sm-4 border">4</div>
    <div class="col-sm-8 border">8</div>
</div>

<div class="row">
    <div class="col-sm-5">
        <h1>h1 <small>jadi kecil</small></h1>
        <h2>h2</h2>
        <h3>h3</h3>
        <h4>h4</h4>
        <h5>h5</h5>
        <h6>h6</h6>
    </div>
    <div class="col-sm-7">
        <h1 class="display-1">Display 1 <small>ini jadi small</small></h1>
        <h1 class="display-1">Display 2 jadi <small>kecil</small></h1>
        <h1 class="display-3">Display 3 ini jadi <abbr title="under">underline</abbr></h1>
        <h1 class="display-4">Display 4 ini jadi
            <mark>Highlight</mark>
        </h1>
    </div>
</div>

<!-- Blockquote -->
<div class="container">
    <h1>Blockquotes</h1>
    <blockquote class="blockquote">
        <p>ini quotenya</p>
        <footer class="blockquote-footer">ini sumbernya</footer>
    </blockquote>
</div>

<!-- dl - dt - dd -->
<div class="container-fluid">
    <div class="row">
        <h1 class="display-1">Ini Buat nglist :</h1>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h1>Makanan</h1>
            <dl>
                <dt>- Nasi Campur</dt>
                <dd> Rp 15 000</dd>
                <dt>- Pecel</dt>
                <dd> Rp 17 000</dd>
                <dt>- Nasi Campur</dt>
                <dd> Rp 22 000</dd>
            </dl>
        </div>
        <div class="col-sm-6">
            <h1>Minuman</h1>
            <dl>
                <dt>- Es Teh</dt>
                <dd>Rp 7500</dd>
                <dt>- Es Jeruk</dt>
                <dd>Rp 10000</dd>
                <dt>- Kopi</dt>
                <dd>Rp 12500</dd>
            </dl>
        </div>
    </div>
</div>

<!-- ini buat kasi tulisan beda -->
<div class="container">
    <h3>Ini untuk kasi tulisan beda?</h3>
    <p>yak ini mulai nggacor aja <code>ini</code> <code>pake code</code></p>
</div>


<!-- ini untuk kasi tulisan shortcut keyboard -->
<div class="container">
    <p>Tulisan aja trus kasih shortcut disini = <kbd>ctrl + s</kbd></p>
</div>

<!-- ini untuk nulis persis seperti  -->
<div class="container-fluid">
    <p>klu pake p ini
        tulisan
        nya
        lanjut2 aja
    </p>
    <pre>klu pake p ini
        tulisan
        nya
        lanjut2          aja
    </pre>
</div>

<div class="container">
    <h1>ini buat awal paragraph jadi lebih gede pake "lead"</h1>
    <p>ini biasa e</p>
    <p class="lead">ini pake lead</p>
</div>


<p class="container bg-danger text-white">ini jadi biru pake bg-primary</p>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>
</html>
