<?php
include 'header.php'; //Untuk memanggil Header
include 'sidebar.php'; //Untuk memanggil Sidebar
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">DATA DOSEN</h1>
    <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div> -->
  </div>

  <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

  <h2>Tabel Dosen</h2>
  <div class="table-responsive small">

    <!-- btn-btn digunakan untuk merubah button menjadi berwarna, 
	    success=hijau, warning=kuning keorenan , danger=merah, primary=biru tua, info=biru cerah -->
    <a class="btn btn-success" href="tambah_dosen.php">+ TAMBAH DOSEN</a>

    <!-- Membuat garis tabel -->
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">NIDN</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Kbk</th>
          <th scope="col">Alamat</th>
          <th scope="col">No Telepon</th>
          <th scope="col">OPSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from dosen order by nama_dosen asc");
        foreach ($data as $d) {
          $jenis_kelamin = $d['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-Laki';
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nidn']; ?></td>
            <td><?php echo $d['nama_dosen']; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $d['kbk']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['no_telepon']; ?></td>
            <td>
              <a class="btn btn-warning" href="edit_dosen.php?id_dosen=<?php echo $d['id_dosen']; ?>">EDIT</a>
              <a class="btn btn-danger" href="hapus_dosen.php?id_dosen=<?php echo $d['id_dosen']; ?>">HAPUS</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</main>
</div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>

</html>