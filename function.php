
<!-- ALL SCRIPT BY
Name: Bambang Wijayanto
NIM: 17.02.0078
Class: D3 Manajemen Informatika - 02
University: Amikom University of Yogyakarta
 -->

<?php 
//koneksi ke database
// $conn = mysqli_connect("localhost", "root", "", "id8451437_bambang");
$conn = mysqli_connect("localhost", "root", "", "bamsdesain");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
	$rows[] = $row;
}
return $rows;
}

function tambah($data){
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$namadesain = htmlspecialchars($data["namadesain"]);
	$telepon = htmlspecialchars($data["telepon"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$tanggal = htmlspecialchars($data["tanggal"]);
	$catatan = htmlspecialchars($data["catatan"]);

	$query = "INSERT INTO pesanan values 
	('', '$nama', '$namadesain', '$telepon', '$email', '$alamat', '$gambar', '$tanggal', '$catatan')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function registrasi($data){
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$email = htmlspecialchars($data["email"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	//cek username sudah ada apa belum
	$result = mysqli_query($conn, "SELECT username FROM pelanggan WHERE username = '$username' ");
	if ( mysqli_fetch_assoc($result) ) {
		echo "<script>
			alert('Username sudah terdaftar!');
		</script>";
		return false;
	}
//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO pelanggan VALUES('', '$username', '$email', '$password')" );
	return mysqli_affected_rows($conn); 
}

function hapus($id_pelanggan){
	global $conn;

	mysqli_query($conn, "DELETE FROM pelanggan WHERE id_pelanggan = $id_pelanggan");
	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
	$id = $data["id"];
		$username = strtolower(stripcslashes($data["username"]));
	$email = htmlspecialchars($data["email"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);



	$query = "UPDATE pelanggan SET
				username = '$username',
				email = '$email',
				password = '$password',
				
				WHERE id_pelanggan = $id
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>