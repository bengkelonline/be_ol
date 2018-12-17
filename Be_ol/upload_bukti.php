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
        <div class="col col-md-3">
            <label for="file-input" class=" form-control-label">File input</label>
        </div>
        <div class="col-12 col-md-9">
        	<input type="text" name="kode_transaksi" id="kode_transaksi" value="<?php echo $id ?>" class="form-control">
            <input type="file" id="file" name="file" class="form-control-file">
        </div>
    </div>
<?php
		}
 	}
?>
