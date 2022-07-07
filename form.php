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
                    <p class="lead">Form</p>
                </div>
            </div>
        </header>

        <!-- Perintah PHP -->
        <main class="container border">
            <div class="row">
                <div class="col-12 py-5">
                <form action="form_action_post.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="txtNama" type="text" class="form-control" id="txtNama" placeholder="Masukan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input name="txtUmur" type="text" class="form-control" id="txtUmur" placeholder="Masukan Umur">
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <label for="gender" class="form-label">Gender</label>
                            <div class="form-check" >
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Pria" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Pria
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Wanita" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                   Wanita
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <label for="hobi" class="form-label">Hobi</label>
                            <div class="form-check" >
                                <label class="form-check-label" for="flexCheckDefault">Travelling</label>
                                <input class="form-check-input" type="checkbox" value="Travelling" id="flexCheckDefault" name="cbHobi[]">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">Shopping</label>
                                <input class="form-check-input" type="checkbox" value="Shopping" id="flexCheckChecked" name="cbHobi[]" >
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <select class="form-select" aria-label="Default select example" name="slPendidikan">
                            <option selected>Pilih Pendidikan</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="Sarjana">Sarjana</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="txtAlamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat"></textarea>
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
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <?php include "footer.php"; ?>
        </footer>
</body>
</html>