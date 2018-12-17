<?php
	include 'config.php';
    // if(isset($_GET['print']))
    // $tanggal = $_POST['tanggal1'];
    session_start();
    $tanggal = $_SESSION['tanggal_terakhir'];
	$data = mysqli_query($connect, "SELECT tb_transaksi.kode_transaksi, tb_user.nama,tb_user.alamat,tb_user.no_telfon,tb_oli.nama_oli,tb_oli.kategori,tb_oli.harga,tb_transaksi.model,tb_transaksi.nama_kendaraan,tb_transaksi.no_polisi,harga_sevice.km,harga_sevice.deskripsi,harga_sevice.harga,tb_transaksi.tgl_transaksi,tb_transaksi.total_harga,tb_transaksi.status,tb_transaksi.bukti_pembayaran FROM tb_transaksi,tb_user,tb_oli,harga_sevice WHERE tb_user.id_user = tb_transaksi.id_user && tb_oli.id_oli = tb_transaksi.id_oli && harga_sevice.km = tb_transaksi.km && tb_transaksi.tgl_transaksi = '$tanggal'");
?>
<html>
<head>
	<title>Print Document</title>
    <!-- <link href="style.css" type="text/css" rel="stylesheet" /> -->
</head>
<body>
	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.Telepon</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Satuan</th>
            <th>Tipe Kendaraan</th>
            <th>Nama Kendaraan</th>
            <th>No.Polisi</th>
            <th>Km</th>
            <!-- <th>Deskripsi</th> -->
            <th>Harga Service</th>
            <th>Tanggal Transaksi</th>
            <th>Total Harga</th>
            <th>Status Pembayaran</th>
            <th>Bukti Pembayaran</th>
        </tr>
         <?php 
                $no = 1;
                while ($sql = mysqli_fetch_array($data)) {
             ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $sql['nama'] ?></td>
                    <td><?php echo $sql['alamat'] ?></td>
                    <td><?php echo $sql['no_telfon'] ?></td>
                    <td><?php echo $sql['nama_oli'] ?></td>
                    <td><?php echo $sql['kategori'] ?></td>
                    <td><?php echo "Rp. "; echo $sql['harga'] ?></td>
                    <td><?php echo $sql['model'] ?></td>
                    <td><?php echo $sql['nama_kendaraan'] ?></td>
                    <td><?php echo $sql['no_polisi'] ?></td>
                    <td><?php echo $sql['km'] ?></td>
                    <!-- <td><?php echo $sql['deskripsi'] ?></td> -->
                    <td><?php echo "Rp. "; echo $sql['harga'] ?></td>
                    <td><?php echo $sql['tgl_transaksi'] ?></td>
                    <td><?php echo "Rp. "; echo $sql['total_harga'] ?></td>
                    <td><?php echo $sql['status'] ?></td>
                    <td><?php echo $sql['bukti_pembayaran'] ?></td>
                </tr><?php $no++; 
            } ?>
    </table>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>