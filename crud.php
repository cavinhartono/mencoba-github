<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nama Siswa</th>
          <th>Jurusan</th>
          <th>Point</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <?php
      $getMahasiswa = "SELECT * FROM Siswa";
      $data = mysqli_query($conn, $getMahasiswa);

      while ($i = mysqli_fetch_array($data)) {
        echo "
            <tr>
              <td>$i[id]</td>
              <td>$i[nama_siswa]</td>
              <td>$i[Jurusan]</td>
              <td>$i[point]</td>
              <td>
                <button>Edit</button>
                <button>Delete</button>
              </td>
            </tr>
          ";
      }
      ?>
      <tbody>
      </tbody>
    </table>
  </div>
</body>

</html>