<?php 
	include("config.php");
	if (isset($_POST['idx'])) {
		# code...
		$id = $_POST['idx'];
		$sql = mysqli_query($connect, "SELECT * FROM tb_transaksi WHERE kode_transaksi = '$id'");
		while ($row = mysqli_fetch_array($sql)) {
			# code...
?>
	<div class="row form-group">
	    <div class="col-md-12">
	    	<center><img src="file/<?php echo $row['bukti_pembayaran'] ?>"></center>
	    </div>
	    <div class="col-md-12">
	        <center><label  class=" form-control-label"><?php echo $row['bukti_pembayaran'] ?></label></center>
	    </div>
	</div>
	<div class="row form-group">
		<div class="col-12 col-md-3">
			<label for="pembayaran">Status Pembayaran</label>
		</div>
		<div class="col-12 col-md-3">
			<input type="hidden" name="kode_transaksi" value="<?php echo $row['kode_transaksi'] ?>">
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="status">
                    <option value="Belum Lunas">Belum Lunas</option>
                    <option value="Lunas">Lunas</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
        </div>
    </div>
<?php 
		}
	}
?>
