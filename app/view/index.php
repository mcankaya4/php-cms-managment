<?php require_once appView("static/header"); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Erbilen.net</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Referanslar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Web Tasarım</a>
                        <a class="dropdown-item" href="#">Web Yazılım</a>
                        <a class="dropdown-item" href="#">Mobil Uygulama</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">İletişim</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Blog'da ara.." aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Ara</button>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Websiteme Hoşgeldiniz!</h1>
        <p class="lead text-muted">Bu web sitesi altında, yazılım ile alakalı makaleler, günlük hayat ile ilgili
            tecrübeler ve müzikle ilgili bazı tavsiyeler bulabilirsiniz. Kısaca kişisel bir bloğa hoşgeldiniz, keyfini
            çıkarın!</p>
        <p>
            <a href="#" class="btn btn-primary my-2">Blog'a Gözat</a>
            <a href="#" class="btn btn-secondary my-2">İletişime Geç</a>
        </p>
    </div>
</section>
<div class="container">
    <div class="row pb-2">
        <div class="col-md-12">
            <h4 class="pb-3">Neler yapıyorum?</h4>
        </div>
        <div class="col-md col-12 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">PSD/Sketch to HTML</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Front-end Developer</h6>
                    <p class="card-text">Photoshop ya da .sketch dosyalarınızı gönderin, html5/css3 kodlanmış şekilde
                        geri alın.</p>
                    <a href="#" class="btn btn-sm btn-danger">Referanslara Gözat <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md col-12 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Web Yazılım</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Back-end Developer</h6>
                    <p class="card-text">Projelerinize hayat verip dinamiklik katıyorum. Yazılım dili olarak PHP
                        kullanıyorum.</p>
                    <a href="#" class="btn btn-sm btn-primary">Referanslara Gözat <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md col-12 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mobil Uygulama</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mobile Developer</h6>
                    <p class="card-text">Native değil ama hybrid olarak istediğin projenin mobil uygulamasını yazıyorum.
                        İster react ister cordova.</p>
                    <a href="#" class="btn btn-sm btn-dark">Referanslara Gözat <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once appView("static/footer"); ?>