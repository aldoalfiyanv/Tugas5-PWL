<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/icontab.png">
</head>
<body>
        <!-- Navbar -->
        <?php include "header.php"; ?>

        <!-- Content -->
        <header class="container bg-secondary text-white">
            <div class="row">
                <div class="col-12 py-4 text-center">
                    <h1 class="font-monospace">202143579015 - Aldo Alfiyan V </h1>
                    <p class="lead">Operator Pembanding</p>
                </div>
            </div>
        </header>

        <!-- Perintah PHP -->
        <main class="container border">
            <div class="row">
                <div class="col-12 py-5 text-center">
                    <?php 
                       $x = 100;
                       $y = 50;

                       echo "Hasil $x > $y = ", var_dump($x > $y),"<br>";
                       echo "Hasil $x < $y = ", var_dump($x < $y),"<br>";
                       echo "Hasil $x = $y = ", var_dump($x == $y),"<br>";
                       echo "Hasil $x != $y = ", var_dump($x != $y),"<br>";
                    ?>
                </div>
                <div class="col-12 py-4 text-center">
                    <img class="w-50" src="img/operator_pembanding.png" alt="gambar">
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <?php include "footer.php"; ?>
        </footer>
</body>
</html>