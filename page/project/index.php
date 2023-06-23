<?php

if (isset($_GET['delete'])) {
  $id = $_GET['id'];
  $sql = "delete from project where id_project='$id'";
  $query = mysqli_query($con, $sql);
  if ($query) {
    echo "<script>alert('Data berhasil dihapus!');window.location.href='index.php?p=project'</script>";
  } else {
    echo mysqli_error($con);
  }
}

?>

<div class="row">
  <div class="col-xs-12">

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Project KKN</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Desa</th>
              <th>Program Kerja</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $sql = "select * from project";
            $query = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($query)) :

            ?>
              <tr>
                <td><?= $row['id_project'] ?></td>
                <td><?= $row['nama_project'] ?></td>
                <td><?= $row['bidang'] ?></td>
                <td>
                  <a href="index.php?p=project&act=edit&id=<?= $row['id_project'] ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                  <a href="index.php?p=project&delete&id=<?= $row['id_project'] ?>" class="btn btn-danger" onclick="return confirm('Apakah data akan dihapus?')"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->