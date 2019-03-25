<!DOCTYPE html>
<html>
<head>
 <title>TAMBAH DATA</title>
 <link rel="stylesheet" href="tan.css">
</head>
<body>  <a href="index.php" class="menu">BERANDA</a> ||
 <a href="tambah.php" class="menu">TAMBAH DATA</a>
 <h2>FORM TAMBAH DATA</h2>
 <form action="" method="POST">
 <table>
 <tr>
  <td>ID Video</td>
  <td><input type="text" name="id_video"  placeholder="Masukkan ID" /></td>
 </tr>
 <tr>
  <td>Title Video</td>
  <td><input type="text" name="title_video"  placeholder="Masukkan Title" /></td>
 </tr>
 <tr>
  <td>Description</td>
    <td> <input type="text" name="description" placeholder="Masukkan Description"></td>
 </tr>
    <tr>
   <td>Thumbnail</td>
   <td><input type="text" name="thumbnail" placeholder="Masukkan Thumbnail"></td>
  </tr>
  <tr>
  <td></td>
    <td><input type="submit" name="tambah" value="Tambah">
  <button type="reset" value="Reset">Reset</button>
   </td>
  </tr>
  </table>
 </form>

 <?php
 
 if(isset($_POST['tambah'])){
  $id_video     = $_POST['id_video'];
  $title_video  = $_POST['title_video'];
  $description  = $_POST['description'];
  $thumbnail    = $_POST['thumbnail'];
  
  include_once("koneksi.php");
  $querytambah = mysqli_query($koneksi, "INSERT INTO video VALUES('$id_video', '$title_video', '$description', '$thumbnail')");
  if($querytambah) {
    header('location: index.php');
   } else{
    echo "Upss Something wrong..";
   }
  }
 ?>
</body>
</html>