<?php  
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "itung";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
	
?>


<html>
<form method="get">
	A =	<input type="number" name="a"><br>
	B =	<input type="number" name="b"><br>
	   <input type="submit" name="submit" value="hitung"> <br>
	   <input type="submit" name="tekan" value="hitungberuntun"> <br>
	
		

</form>
<form method="POST" style="">
	c =	<input type="number" name="c" value="<?php echo $c; ?>">
</form>



<?php 

	$c = 0;
	

	if (isset($_GET['submit'])) {
		
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $a + $b ;

	echo $c;

		

//Buat Keterangan

	if($c >=0 && $c <=10 ) {
		echo "Anda Mendapat A";
		$ket = "A" ;
	}elseif($c >=10 && $c <= 20 ) {
	  echo "Anda Mendapat B";
	  $ket = "B" ;
	}elseif($c >=20 && $c <=30 ) {
		echo "Anda Mendapat C";
		$ket = "C" ;	
	}elseif ($c >=30 && $c <=40) {
		echo "Anda Mendapat D";
		$ket = "D" ;
	}elseif ($c >=40 && $c <=50) {
		echo "Anda Mendapat D";
		$ket = "D" ;
	}




	//BUAT KONEKSI KE DATABASE
	$sql = mysqli_query($koneksi, "INSERT INTO hitung (a,
b, c, ket) VALUES( '$a', '$b', '$c' ,'$ket')") or
die(mysqli_error($koneksi));
if($sql){
echo '<script>alert("Berhasil menambahkan data.");
document.location="contoh.php";</script>';
}else{
echo '<div class="alert alert-warning">Gagal melakukan
proses tambah data.</div>';


}
	}

?>
		
	<?php 


	if (isset($_GET['tekan'])) {
		
	$a = $_GET['a'];
	$b = $_GET['b'];
	for ($i=1; $i <=10 ; $i++) { 
		$c = $a + $b ; 




	if($c >=0 && $c <=10 ) {
		echo "Anda Mendapat A";
		$ket = "A" ;
	}elseif($c >=10 && $c <= 20 ) {
	  echo "Anda Mendapat B";
	  $ket = "B" ;
	}elseif($c >=20 && $c <=30 ) {
		echo "Anda Mendapat C";
		$ket = "C" ;	
	}elseif ($c >=30 && $c <=40) {
		echo "Anda Mendapat D";
		$ket = "D" ;
	}elseif ($c >=40 && $c <=50) {
		echo "Anda Mendapat D";
		$ket = "D" ;
	}		

		$sql = mysqli_query($koneksi, "INSERT INTO hitungruntun (a,
b, c, ket) VALUES( '$a', '$b', '$c' ,'$ket')") or
die(mysqli_error($koneksi));

	$a = $b ;
	$b = $c ;
	}


	if($sql){
echo '<script>alert("Berhasil menambahkan data.");
document.location="contoh.php";</script>';
}else{
echo '<div class="alert alert-warning">Gagal melakukan
proses tambah data.</div>';

}
		
}
	echo $c;


	 ?>
}

<table border="1">
	<tr>
		<td>id</td>
		<td>a</td>
		<td>b</td>
		<td>c</td>
		<td>ket</td>

	</tr>

	<?php  

	//BUAT TAMPILIN KE WEB

	$sql = mysqli_query($koneksi, "SELECT * From hitung" );

	while($data = mysqli_fetch_assoc($sql)) {
	 	?>
	 <tr>
	 	<td><?php echo $data ['id'] ; ?></td>
	 	<td><?php echo $data ['a'] ; ?></td>
	 	<td><?php echo $data ['b'] ; ?></td>
	 	<td><?php echo $data ['c'] ; ?></td>
	 	<td><?php echo $data ['ket'] ; ?></td>

	 </tr>
	 <?php
	 } 

	?>
	</table>
<br>
<br>
<br>

	<table border="1">
	<tr>
		<td>id</td>
		<td>a</td>
		<td>b</td>
		<td>c</td>
		<td>ket</td>

	</tr>

	<?php  

	//BUAT TAMPILIN KE WEB
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * From hitungruntun" );

	while($data = mysqli_fetch_assoc($sql)) {
	 	?>
	 <tr>
	 	<td><?php echo $no++ ; ?></td>
	 	<td><?php echo $data ['a'] ; ?></td>
	 	<td><?php echo $data ['b'] ; ?></td>
	 	<td><?php echo $data ['c'] ; ?></td>
	 	<td><?php echo $data ['ket'] ; ?></td>

	 </tr>
	 <?php
	 } 

	?>
</table>


	<form method="GET" action="">
		<input type="submit" name="hapus" value="hapus">
	</form>

	<?php 

		if (isset($_GET['hapus'])) {
			$sql = mysqli_query($koneksi, "DELETE FROM `hitungruntun`") ;	


	if($sql){
echo '<script>alert("Berhasil menghapus data.");
document.location="contoh.php";</script>';
}else{
echo '<div class="alert alert-warning">Gagal melakukan
proses tambah data.</div>';
		}
}
	 ?>
	
</html>
