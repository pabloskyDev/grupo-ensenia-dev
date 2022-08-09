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

    <div id="carousel-index" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-index" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-index" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-index" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../src/img/slide-1.jpeg" class="d-block w-100 h-25" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../src/img/slide-2.jpg" class="d-block w-100 h-25" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../src/img/slide-3.jpeg" class="d-block w-100 h-25" alt="...">
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