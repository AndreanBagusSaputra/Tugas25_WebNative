<?php
    $id = $_REQUEST['id'];
    $model = new Kartu();
    $kartu = $model -> getKartu($id);
?>

<div>
    <h3><?= $kartu['kode']?>10111</h3>
</div>