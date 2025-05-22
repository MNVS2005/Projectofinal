<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <title>Peliculas</title>
    <style>
    th, td {
        padding: 8px 12px;
        border: 1px solid #999;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
    }
    body {
        font-family: Arial, sans-serif;
        background-color:rgb(118, 211, 214);
    }</style>
    <?php include('include/config.php')?>

</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Cartelera de las mejores <b>peliculas</b></h1>

   <?php
    $query = "SELECT * FROM Peliculas";
    $resultado = mysqli_query($conn,$query);

    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($conn));
    }
   ?>
   <div class="lista">
        <ul>
        <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <li class="list-group-item mb-3">
            <?php
                static $shownTitles = [];
                if (!in_array($row['Titulo'], $shownTitles)) {
                    $shownTitles[] = $row['Titulo'];
            ?>
                    <h5 class="mb-2"><strong>Titulo:</strong> <?php echo $row['Titulo']; ?></h5>
                    <p class="mb-1"><strong>Fecha:</strong> <?php echo $row['Fecha']; ?></p>
                    <p class="mb-1"><strong>Valoracion:</strong> <?php echo $row['Valoracion']; ?></p>
                    <p class="mb-1"><strong>Genero:</strong> <?php echo $row['Genero:']; ?></p>
            <?php } ?>
        
        <?php } ?>
            </li>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
            $(".list-group-item p").hide(); // Hide all details by default
            $(".toggle-btn").click(function() {
                $(".list-group-item p").toggle(); // Toggle all details
            });
            });
        </script>
        <button class="btn btn-primary toggle-btn">Mostrar/Ocultar Detalles</button>
        </ul>  
    </div>
</div>
</body>
</html>