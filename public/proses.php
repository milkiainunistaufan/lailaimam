<?php
require_once "../connection/config.php";




if(isset($_POST['kirim'])){
    $nama = trim(mysqli_real_escape_string($con, $_POST['name']));
    $pesan = trim(mysqli_real_escape_string($con, $_POST['pesan']));
    


    mysqli_query($con, "INSERT INTO chat ( nama, chat ) VALUES ('$nama','$pesan')") or die (mysqli_error($con));
    
} else {
    echo "Gagal";

}
echo "<script>window.location='http://localhost:8080/lailaimam/public/'</script>";
?>