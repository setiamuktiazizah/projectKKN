<?php

if (isset($_POST['simpan'])) {

  echo "<script>window.location.href='index.php?p=alternatif&d=$_POST[bidang]'</script>";
}

?>

<div class="row">
  <!-- left column -->
  <div class="col-md-8">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Pilih Program Kerja KKN</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Program Kerja</label>
            <select name="bidang" class="form-control">
              <option value="">-- Pilih Bidang --</option>
              <option value="teknologi">Teknologi</option>
              <option value="kesehatan">Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)</option>
              <option value="kesehatan2">Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)</option>
              <option value="kesehatan3">Pelatihan pertolongan pertama kepada masyaratakt, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma</option>
              <option value="pendidikan1">Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif'</option>
            </select>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary" name="simpan">Pilih</button>
          <!-- <a href="#" class="right btn btn-primary">Lihat rangking</a> -->
        </div>
      </form>
    </div>
    <!-- /.box -->


    <?php
    $sql = "select * from alternatif";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);
    $row = mysqli_num_rows($query);

    if ($row > 0 && $data['lihat'] == '0') {
    ?>

      <a href="index.php?p=rank" class="btn btn-primary">Lihat Ranking</a>

    <?php
    } else if ($data['lihat'] == '1') {

      $sql = "TRUNCATE TABLE alternatif;";
      $query = mysqli_query($con, $sql);
      if ($query) {
        $sql = "TRUNCATE TABLE nilai_alternatif;";
        $query = mysqli_query($con, $sql);
        if ($query) {
          echo "Data telah direset ulang";
        } else {
          echo mysqli_error($con);
        }
      } else
        echo mysqli_error($con);
    }

    ?>

  </div>
  <!--/.col (left) -->

</div>
<!-- /.row -->