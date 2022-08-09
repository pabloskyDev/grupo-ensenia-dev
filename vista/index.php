<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/styles.css">
    <title>Grupo Enseña</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-nav">
        <?php include '../templates/header.php';?>
    </nav>

    <div id="carousel-index" class="carousel slide row" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-index" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-index" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-index" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner col-12 ">
            <div class="carousel-item carousel-inner__item active" data-bs-interval="2000">
                <img src="../src/img/carrousel1.png" class="d-block" alt="slide principal 1">
            </div>
            <div class="carousel-item carousel-inner__item" data-bs-interval="2000">
                <img src="../src/img/carrousel2.png" class="d-block" alt="slide principal 2">
            </div>
            <div class="carousel-item carousel-inner__item" data-bs-interval="2000">
                <img src="../src/img/carrousel3.png" class="d-block" alt="slide principal 3">
            </div>
        </div>
    </div>

    <div class="card-index">
        <div class="row mt-3 mb-3">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card m-auto" style="width: 18rem;">
                    <img src="../src/img/imgcard1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card m-auto" style="width: 18rem;">
                    <img src="../src/img/imgcard2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card m-auto" style="width: 18rem;">
                    <img src="../src/img/imgcard3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="historia-index">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <figure>
                    <img src="" alt="">
                    <figcaption>Imagen referente de señas</figcaption>
                </figure>
            </div>
            <div class="col-md-6 col-sm-12">
                <h1>Lenguaje de señas</h1>
                <p>Un poco de la historia del lenguaje de señas.</p>
            </div>
        </div>
    </div>

    <div class="barra-lateral">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group-vertical me-2" role="group" aria-label="group">
                <button type="button" class="btn btn-secondary">5</button>
                <button type="button" class="btn btn-secondary">6</button>
                <button type="button" class="btn btn-secondary">7</button>
                <button type="button" class="btn btn-secondary">8</button>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start bg-nav text-muted">
        <?php include '../templates/footer.php';?>
    </footer>

    <?php include '../templates/scripts.php';?>
    <script src="../src/js/app.js"></script>
</body>
</html>