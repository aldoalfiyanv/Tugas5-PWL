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

        <!-- Navbar -->
        <header class="container bg-secondary text-white">
            <div class="row">
                <div class="col-12 py-4 text-center">
                    <h1 class="font-monospace">202143579015 - Aldo Alfiyan V </h1>
                    <p class="lead">Switch</p>
                </div>
            </div>
        </header>

        <!-- Perintah PHP -->
        <main class="container border">
            <div class="row">
                <div class="col-12 py-5 text-center">
                    <?php 
                       $bulan = 2;
                       switch ($bulan) {
                         case 1: echo "Januari"; break;
                         case 2: echo "Februari"; break;
                         case 3: echo "Maret"; break;
                         case 4: echo "April"; break;
                         case 5: echo "Mei"; break;
                         case 6: echo "Juni"; break;
                         case 7: echo "Juli"; break;
                         case 8: echo "Agustus"; break;
                         case 9: echo "September"; break;
                         case 10: echo "Oktober"; break;
                         case 11: echo "November"; break;
                         case 12: echo "Desember"; break;
                       }
                    ?>
                </div>
                <div class="col-12 py-4 text-center">
                    <img class="w-50" src="img/switch.png" alt="gambar">
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <?php include "footer.php"; ?>
        </footer>
</body>
</html>