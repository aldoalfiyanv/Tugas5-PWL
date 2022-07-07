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
                    <p class="lead">Operator String</p>
                </div>
            </div>
        </header>

        <!-- Perintah PHP -->
        <main class="container border">
            <div class="row">
                <div class="col-12 py-5 text-center">
                    <?php 
                       $txt1 = "Hello";
                       $txt2 = " World!";
                       echo "Hasil $txt1 . $txt2 Menjadi ", $txt1 . $txt2, "<br>";
                       $txt1 .= $txt2;
                       echo "Hasil $txt1 .= $txt2 Menjadi ", $txt1;
                    ?>
                </div>
                <div class="col-12 py-4 text-center">
                    <img class="w-50" src="img/operator_string.png" alt="gambar">
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <?php include "footer.php" ; ?>
        </footer>
</body>
</html>