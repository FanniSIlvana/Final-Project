<!DOCTYPE html>
<html>
    <header>
    <title> Ann's Clothing </title>
      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    </header>
    <body>
        <div class="bg-image" style="background-image: url(img/pin.png); height: 200vh;">

            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-family: playfair display;">Ann's Clothing</a>
                    </div>
                    
                    <ul class="navbar-nav nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chart.php">Chart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report.php">Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    </ul>  
                </div>
            </nav>
            
            <div class="text-center" style="margin-top: 30px;">
                <img src="img/p5.jpg" class="rounded" style="width: 700px;" alt="pict">
            </div>

            <div class="container" style="margin-top: 25px; margin-left: 25px;">
                <div class="row">
                    <div class="col-md-2">
                        <div id="list-kategori" class="list-group">
                            <a class="list-group-item list-group-item-action" href="#tradisional">Tradisional / Adat</a>
                            <a class="list-group-item list-group-item-action" href="#modern">Modern Dress</a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div data-bs-spy="scroll" data-bs-target="#list-kategori" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                            <h4 id="tradisional">Pakaian Tradisional Indonesia</h4>
                                <p>
                                    <div class="row">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/p1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/p1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/p1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 14rem; margin-left: 10px;">
                                            <img src="img/p1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            <h4 id="modern">Modern Dress</h4>
                            <p>...</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>
    <footer class="bg-dark text-center text-white">
        <div class="container p-4">

        <section class="mb-4">
            <p>
                Website ini dibuat untuk memenuhi tugas final Project Pemrograman Web

            </p>
            </section>

            <section class="mb-4">
            <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
            GitHub
            </a>
        </section>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white">Fanni & Anindya Final Project</a>
        </div>
  </footer>
</html>