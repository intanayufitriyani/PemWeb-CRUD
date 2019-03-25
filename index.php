<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
 <link rel="stylesheet" href="tan.css">
</head>
<body>
<a href="index.php" class="menu">BERANDA</a> ||
<a href="tambah.php" class="menu">TAMBAH DATA</a>
<br>
<br>
<form action="" method="POST">
<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#1abc9c">
  <td>ID Video</td>
  <td>Title Video</td>
  <td>Description</td>
  <td>Thumbnail</td>

 </tr>
  <?php
          include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM video") or die (mysqli_error());
       if(mysqli_num_rows($query) == 0){
    echo "<b>Tidak ada data yang tersedia</b>";
    }else{
      while($r = mysqli_fetch_array($query)):     ?>
   
 <tr style="text-align:center">
  <td><?php echo $r['id_video'] ?></td>
  <td><?php echo $r['title_video'] ?></td>
  <td><?php echo $r['description'] ?></td>
  <td><?php echo $r['thumbnail'] ?></td>
  <td>
   <a href="edit.php?id_video=<?php echo $r['id_video'] ?>">Edit</a> ||
   <a href="delete.php?id_video=<?php echo $r['id_video'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
  </td>
 </tr>
 <?php
  endwhile;
  }
 ?>
</table>
</form>
</body>
</html>