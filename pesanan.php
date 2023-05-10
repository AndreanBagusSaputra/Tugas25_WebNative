<?php
   // include_once 'top.php';
   // include_once 'menu.php';
   // include_once 'models/Produk.php';
   
   $model = new Pesanan();
   $pesanan = $model -> Pesanan();

//    foreach ($data_produk as $row){
//         print $row['kode'];
//    }
?>
                    <h1 class="mt-4">Pesanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="index.php?url=pesanan_form" class="btn btn-primary btn-sm">Tambah Pesanan</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Pelanggan Id</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Pelanggan Id</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($pesanan as $row){
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row ['tanggal']?></td>
                                            <td><?= $row ['total']?></td>
                                            <td><?= $row ['pelanggan_id']?></td>
                                            <td>
                                                <form action="pesanan_controller.php" method="POST"></form>
                                                <a class= "btn btn-info btn-sm" href="index.php?url=pesanan_detail&id = <?= $row ['id'] ?>">Detail</a>
                                                <a class= "btn btn-warning btn-sm" href="index.php?url=pesanan_form&idedit=<?= $row ['id']?>">Update</a>
                                                <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                                onclick="return confirm('Anda yakin akan dihapus ?')">Hapus</button>
                                                <input type="hidden" name="idx" value="<?= $row['id']?>">
                                            </td>
                                        </tr>
                                    <?php $no++; } ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>

<?php
     include_once 'bottom.php';
?>
