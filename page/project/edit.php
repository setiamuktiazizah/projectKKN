<?php

$id = $_GET['id'];
$sql = "select * from project where id_project='$id'";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);


if (isset($_POST['simpan'])) {

  $project = $_POST['project'];
  $bidang = $_POST['bidang'];

  $sql = "update project set nama_project='$project', bidang='$bidang' where id_project='$id'";
  $query = mysqli_query($con, $sql);
  if ($query) {
    echo "<script>alert('Data berhasil diubah!');window.location.href='index.php?p=project'</script>";
  } else {
    echo "Error : " . mysqli_error($con);
  }
}

?>

<div class="row">
  <!-- left column -->
  <div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Form Kriteria</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Project KKN</label>
            <input type="text" class="form-control input-lg" id="exampleInputEmail1" placeholder="Masukan Nama Project" name="project" required value="<?= $data['nama_project'] ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Bidang</label>
            <select name="bidang" class="form-control input-lg">
              <option value="">-- Pilih Bidang --</option>
              <option value="kesehatan" <?= ($data['bidang'] == 'kesehatan') ? 'selected' : '' ?>>Kesehatan</option>
              <option value="pendidikan" <?= ($data['bidang'] == 'pendidikan') ? 'selected' : '' ?>>Pendidikan</option>
              <option value="teknologi" <?= ($data['bidang'] == 'teknologi') ? 'selected' : '' ?>>Teknologi</option>
            </select>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.box -->


  </div>
  <!--/.col (left) -->

</div>
<!-- /.row -->