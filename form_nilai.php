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
                    <p class="lead">Form Input Nilai</p>
                </div>
            </div>
        </header>

        <!-- Perintah PHP -->
        <main class="container border">
            <div class="row">
                <div class="col-12 py-5">
                    <form action=" " method="post">
                        <div class="col-xs-2">
                            <label for="nama" class="form-label">Nilai</label>
                            <input name="txtNilai" type="text" class="form-control" id="txtNilai" placeholder="Masukan Nilai">
                        </div>
                        <div class="mb-3">
                            <!-- Kosong -->
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col-2">
                                <button name="reset" type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mb-3">
                    <?php 
                        if (isset($_POST ["submit"])){
                            $hasil = $_POST["txtNilai"];
                            echo ("Nilai Angka : ". $hasil ."<br>");
                            if ($hasil>=85 && $hasil<=100 )
                            echo("Nilai Huruf : <b>A</b>");
                            else if ($hasil>=70 && $hasil<=84)
                            echo("Nilai Huruf : <b>B</b>");
                            else if ($hasil>=60 && $hasil<70)
                            echo("Nilai Huruf : <b>C</b>");
                            else if ($hasil>=50 && $hasil<60)
                            echo("Nilai Huruf : <b>D</b>");
                            else
                            echo("Nilai Huruf : <b>E</b>");
                        }
                    ?>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <?php include "footer.php"; ?>
        </footer>
</body>
</html>