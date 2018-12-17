<?php 
	include("config.php");
	if (isset($_POST['idx'])) {
		# code...
		$id = $_POST['idx'];
		$sql = mysqli_query($connect, "SELECT * FROM tb_oli WHERE id_oli = '$id'");

		while ($row = mysqli_fetch_array($sql)) {
			# code...
?>


		<div class="form-group">
            <label for="nama_barang" class=" form-control-label">Nama Barang</label>
            <div class="rs-select2--light rs-select2--md">
            	<input type="hidden" name="id_oli" value="<?php echo $row['id_oli'] ?>">
                <input type="text" name="nama_barang" id="nama_barang" value="<?php echo $row['nama_oli'] ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="harga_barang" class=" form-control-label">Harga</label><br>
            <div class="rs-select2--light rs-select2--md">
                <input type="text" name="harga_barang" id="harga_barang" value="<?php echo $row['harga'] ?>" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="kategori_barang" class=" form-control-label">Kategori</label><br>
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="kategori_barang">
                    <!-- <option selected="selected" disabled="disabled">--pilih--</option> -->
                    <option>bebek</option>
                    <option>sport</option>
                    <option>matic</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
        </div>
<?php
		}
	}
?>