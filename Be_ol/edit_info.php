<?php 
    include("config.php");
    if (isset($_POST['idx'])) {
        # code...
        $id = $_POST['idx'];
        $sql = mysqli_query($connect, "SELECT * FROM info WHERE id_info = '$id'");

    while ($row = mysqli_fetch_array($sql)) {
        # code...
    
?>
        
        <div class="form-group">
            <label for="nama" class=" form-control-label">Nama Barang</label>
            <input type="hidden" name="id_info" id="id_info" value="<?php echo $row['id_info'] ?>">
            <input type="text" id="nama" name="nama" placeholder="Nama Barang" value="<?php echo $row['nama'] ?>" class="form-control"></div>
        </div>
        <div class="form-group">
            <label for="kategori" class=" form-control-label">Kategori</label>
            <div class="rs-select2--light rs-select2--md">
            <select class="js-select2" name="kategori">
                <option>Oli</option>
                <option>Sparepart</option>
            </select>
            <div class="dropDownSelect2"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="deskripsi" class="form-control-label">Deskripsi</label>
            <textarea type="text" id="deskripsi" name="deskripsi"  class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="file" class="form-control-label">Gambar</label>
            <input type="file" id="file" name="file" class="form-control-file">
        </div>

   
<?php 
        }
    }
?>