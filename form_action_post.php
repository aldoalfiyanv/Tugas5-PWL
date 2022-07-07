<h1><u>BIODATA DIRI</u></h1>
<?php 
    if (isset($_POST ["submit"])) {
        echo "Nama : " . $_POST["txtNama"] . "<br>";
        echo "Umur : " . $_POST["txtUmur"] . " Tahun" . "<br>"; 
    }

    if (isset($_POST ["submit"])){
        $gender = $_POST["flexRadioDefault"];
        if (isset($gender) && $gender=="Pria"){
            echo "Gender : " . $gender. "<br>";
        } 
        else if (isset($gender) && $gender=="Wanita") {
            echo "Gender : " . $gender. "<br>";
        }
    } 
    

    if(isset($_POST['submit'])){//to run PHP script on submit
            if(!empty($_POST['cbHobi'])){
            // Loop to store and display values of individual checked checkbox.
            echo "Hobi : ";
            foreach($_POST['cbHobi'] as $selected){
            echo  $selected.', ';
            }
        }
    }

    echo "<br>";
    
    if (isset($_POST['submit'])) {
        $pendidikan = $_POST["slPendidikan"];
        echo "Pendidikan : " . $pendidikan . "<br>";
    }

    if (isset($_POST ["submit"])) {
        echo "Alamat : " . $_POST["txtAlamat"];  
    }
?>
<br>
<br>
<a href="form.php">Back</a>