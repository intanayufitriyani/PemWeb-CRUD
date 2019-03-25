<?php
	include 'koneksi.php';
	$id_video = $_GET['id_video'];
	$data = mysqli_query($koneksi,"SELECT * from video where id_video='$id_video'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="index.php">
			<table>
				<tr>			
					<td>ID Video</td>
					<td>
						<input type="number" name="id_video" value="<?php echo $d['id_video']; ?>">
					</td>
				</tr>
				<tr>
					<td>Title Video</td>
					<td>
                        <input type="text" name="title_video" value="<?php echo $d['title_video']; ?>">
                    </td>
				</tr>
                <tr>
                    <td>Description</td>
					<td>
                        <input type="text" name="description" value="<?php echo $d['description']; ?>">
                    </td>
				</tr>
                <tr>
                    <td>Thumbnail</td>
					<td>
                        <input type="text" name="thubnail" value="<?php echo $d['thumbnailo']; ?>">
                    </td>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>