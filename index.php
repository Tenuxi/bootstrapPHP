<?php

$page=isset($_GET['page'])?$_GET['page']:'aloitus';
// require("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Bootstrap PHP testi</title>
</head>
<body>

    <!-- HEADER -->

    <header>Bootstrap PHP testi</header>


    <!-- NAVIGAATIO -->

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo "?page=aloitus"; ?>">Etusivu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo "?page=toinen"; ?>">Toinen sivu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo "?page=kolmas"; ?>">Kolmas sivu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Neljäs sivu</a>
            </li>
        </ul>


    <!-- CONTENTTI -->

    <div class="container-fluid">
    
    <?php

        if($page=="aloitus"){
            include("aloitus.php");
        }
        if($page=="toinen"){
            include("toinen.php");
        }
        if($page=="kolmas"){
            include("kolmas.php");
        }

    ?>

    </div>

    <!-- FOOTTERI -->

    <footer>
            Joonas - 2019
    </footer>


    <!-- JS YMS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>