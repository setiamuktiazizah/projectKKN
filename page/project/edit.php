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
            <label for="exampleInputEmail1">Nama Desa</label>
            <input type="text" class="form-control input-lg" id="exampleInputEmail1" placeholder="Masukan Nama Desa" name="project" required value="<?= $data['nama_project'] ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Program Kerja</label>
            <select name="bidang" class="form-control input-lg">
              <option value="">-- Pilih Program Kerja --</option>
              <option value="Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)" <?= ($data['bidang'] == 'Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)') ? 'selected' : '' ?>>Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)</option>
              <option value="Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)" <?= ($data['bidang'] == 'Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)') ? 'selected' : '' ?>>Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)</option>
              <option value="Pelatihan pertolongan pertama kepada masyarakat, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma" <?= ($data['bidang'] == 'Pelatihan pertolongan pertama kepada masyarakat, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma') ? 'selected' : '' ?>>Pelatihan pertolongan pertama kepada masyaratakt, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma</option>
              <option value="Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif" <?= ($data['bidang'] == 'Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif') ? 'selected' : '' ?>>Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif</option>
              <option value="Penyuluhan pentingnya pendidikan bagi anak <?= ($data['bidang'] == 'Penyuluhan pentingnya pendidikan bagi anak') ? 'selected' : '' ?>">Penyuluhan pentingnya pendidikan bagi anak </option>
              <option value="Pelatihan guru untuk meningkatkan keterampilan dan pengetahuan guru dalam pengajaran dan manajemen kelas" <?= ($data['bidang'] == 'Pelatihan guru untuk meningkatkan keterampilan dan pengetahuan guru dalam pengajaran dan manajemen kelas') ? 'selected' : '' ?>>Pelatihan guru untuk meningkatkan keterampilan dan pengetahuan guru dalam pengajaran dan manajemen kelas</option>
              <option value="Pelatihan dasar-dasar komputer (ms.office)" <?= ($data['bidang'] == 'Pelatihan dasar-dasar komputer (ms.office)') ? 'selected' : '' ?>>Pelatihan dasar-dasar komputer (ms.office) </option>
              <option value="Membangun aplikasi atau web yang dibutuhkan di desa" <?= ($data['bidang'] == 'Membangun aplikasi atau web yang dibutuhkan di desa') ? 'selected' : '' ?>>Membangun aplikasi atau web yang dibutuhkan di desa</option>
              <option value="Membantu memperbaiki atau membangun sarana air bersih, seperti sumur bor atau instalasi air bersih sederhana" <?= ($data['bidang'] == 'Membantu memperbaiki atau membangun sarana air bersih, seperti sumur bor atau instalasi air bersih sederhana') ? 'selected' : '' ?>>Membantu memperbaiki atau membangun sarana air bersih, seperti sumur bor atau instalasi air bersih sederhana</option>
              <option value="Mengadakan kegiatan kerja bakti lingkungan" <?= ($data['bidang'] == 'Mengadakan kegiatan kerja bakti lingkungan') ? 'selected' : '' ?>>Mengadakan kegiatan kerja bakti lingkungan</option>
              <option value="Membuat jalur mitigasi bencana" <?= ($data['bidang'] == 'Membuat jalur mitigasi bencana') ? 'selected' : '' ?>>Membuat jalur mitigasi bencana</option>
              <option value="Mengadakan kegiatan penyuluhan dan pelatihan kepada masyarakat tentang mitigasi bencana, termasuk pengetahuan tentang risiko bencana, identifikasi bahaya dan langkah pencegahan yang dapat diambil" <?= ($data['bidang'] == 'Mengadakan kegiatan penyuluhan dan pelatihan kepada masyarakat tentang mitigasi bencana, termasuk pengetahuan tentang risiko bencana, identifikasi bahaya dan langkah pencegahan yang dapat diambil') ? 'selected' : '' ?>>Mengadakan kegiatan penyuluhan dan pelatihan kepada masyarakat tentang mitigasi bencana, termasuk pengetahuan tentang risiko bencana, identifikasi bahaya dan langkah pencegahan yang dapat diambil</option>
              <option value="Mengadakan kegiatan daur ulang sampah menjadi barang yang berguna" <?= ($data['bidang'] == 'Mengadakan kegiatan daur ulang sampah menjadi barang yang berguna') ? 'selected' : '' ?>>Mengadakan kegiatan daur ulang sampah menjadi barang yang berguna</option>
              <option value="Penyuluhan mengenai teknik bercocok tanam, kondisi tanaman yang sesuai berdasarkan jenis tanah, iklim, dll." <?= ($data['bidang'] == 'Penyuluhan mengenai teknik bercocok tanam, kondisi tanaman yang sesuai berdasarkan jenis tanah, iklim, dll.') ? 'selected' : '' ?>>>Penyuluhan mengenai teknik bercocok tanam, kondisi tanaman yang sesuai berdasarkan jenis tanah, iklim, dll.</option>
              <option value="Pelatihan mengenai pembuatan dan perawatan tanaman hidroponik" <?= ($data['bidang'] == 'Pelatihan mengenai pembuatan dan perawatan tanaman hidroponik') ? 'selected' : '' ?>>Pelatihan mengenai pembuatan dan perawatan tanaman hidroponik</option>
              <option value="Pelatihan mengenai pembuatan pupuk kompos yang berkualitas dan cara menanggulangi hama" <?= ($data['bidang'] == 'Pelatihan mengenai pembuatan pupuk kompos yang berkualitas dan cara menanggulangi hama') ? 'selected' : '' ?>>Pelatihan mengenai pembuatan pupuk kompos yang berkualitas dan cara menanggulangi hama</option>
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