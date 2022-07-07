<html>
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
                <p class="lead">Function</p>
            </div>
        </div>
    </header>

    <!-- Perintah PHP -->
    <main class="container border">
        <div class="row">
            <div class="col-12 py-5 text-center">
            <!-- Function Tanpa Parameter -->
            <h3> Function Tanpa Parameter </h3>
                <?php 
                    function salam() {
                        echo "Halo Kawan\n"; 
                    }
                    salam();
                ?>
            </div>
            <div class="col-12 py-4 text-center">
                <img class="w-50" src="img/function1.png" alt="gambar">
            </div> 

            <!-- Function Dengan Parameter -->
            <div class="col-12 py-5 text-center">
            <h3> Function Dengan Parameter </h3>
                <?php 
                    function name($nama) {
                        echo "Halo ". $nama ."<br>"; 
                    }
                    name("Upin");
                    name("Upin");
                ?>
            </div>
            <div class="col-12 py-4 text-center">
                <img class="w-50" src="img/function2.png" alt="gambar">
            </div> 

            <!-- Function Dengan Parameter (Optional Arguments) -->
            <div class="col-12 py-5 text-center">
            <h3> Function Dengan Parameter (Optional Arguments) </h3>
                <?php 
                    function greeting($nama = "PHP") {
                        echo "Halo ". $nama ; 
                    }
                    greeting(); 
                ?>
            </div>
            <div class="col-12 py-4 text-center">
                <img class="w-50" src="img/function3.png" alt="gambar">
            </div> 

            <!-- Function Call By Value -->
            <div class="col-12 py-5 text-center">
            <h3> Function Call By Value </h3>
                <?php 
                    function jumlahkan($x , $y) {
                        $jumlah = $x + $y ;
                        return $jumlah ;
                    }
                    echo "Hasilnya = " . jumlahkan(10,2) . "<br>";
                    
                    $bil = 0; 
                    $bil = jumlahkan(9,9);
                    echo "Hasilnya = ". $bil;
                ?>
            </div>
            <div class="col-12 py-4 text-center">
                <img class="w-50" src="img/function4.png" alt="gambar">
            </div> 

            <!-- Function Call By Reference -->
            <div class="col-12 py-5 text-center">
            <h3> Function Call By Reference </h3>
                <?php 
                    function nilaiKuadrat(&$nilai) {
                        $nilai = $nilai * $nilai;
                    }
                  
                    $bil = 3; 
                    echo "Nilai = ". $bil . "<br>";

                    nilaiKuadrat($bil);
                    echo "Nilai = ". $bil;

                ?>
            </div>
            <div class="col-12 py-4 text-center">
                <img class="w-50" src="img/function5.png" alt="gambar">
            </div> 
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <?php include "footer.php"; ?>
    </footer>  
</body>
</html>