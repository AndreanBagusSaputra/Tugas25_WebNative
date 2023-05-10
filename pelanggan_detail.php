<?php
    $id = $_REQUEST['id'];
    $model = new Pelanggan();
    $pelanggan = $model -> getPelanggan($id);
?>

<h1 class="mt-4">Detail Pelanggan</h1>
<div class="card-body">
    <div class="card mb-4">
        <table id="datatableSimple">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Kartu Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $pelanggan['kode']?></td>
                    <td><?= $pelanggan['nama_pelanggan']?></td>
                    <td><?= $pelanggan['jk']?></td>
                    <td><?= $pelanggan['tmp_lahir']?></td>
                    <td><?= $pelanggan['tgl_lahir']?></td>
                    <td><?= $pelanggan['alamat']?></td>
                    <td><?= $pelanggan['email']?></td>
                    <td><?= $pelanggan['kartu_id']?></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
