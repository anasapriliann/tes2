<?php

class aksi
{

	var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "praktikum5";

	function __construct()
	{
		$this->koneksi = mysqli_connect($this->username, $this->password);
		mysqli_select_db($this->koneksi, $this->database);
	}

	public function registrasi(){
		$nama = $_POST['nama'];
		$username = strtolower($_POST['username']);
		$password = mysqli_real_escape_string($this->$koneksi, $_POST['password']);
		$password = mysqli_real_escape_string($this->$koneksi, $_POST['password']);

		$cek_username = "SELECT username from user WHERE username = '$username'";
		$result_username = mysql_query($this->koneksi, $cek_username);

		if(mysqli_fetch_assoc($result_username)){
			echo "<script>alert('username yang anda masukan tidak tersedia!');</script>";
		}


		if($password !== $password2){
			echo "<script>alert('Password tidak sesuai');</script>";
			return false;
		}
		$password = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO user VALUES ('', '$nama', '$username', '$password')";
		$result = mysql_query($this->koneksi, $sql);

		id ($result){
			echo "<script>alert('Registrasi berhasil');</script>";
		} else{

		}
	}

	public function login()
	{
		$username = $_POST['username'];
		$result = $_POST['password'];

		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
		$result = mysql_query($this->koneksi, $sql);
		$row = $result->fetch_assoc();
		if (!empty($row)) {
			session_start();
			$_SESSION['user'] = $username;
			echo "<script>alert('Login Berasil');location'../index.php';</script>";
		}else{
			"<script>alert('Username atau Password Salah');location'../login.php';</script>";
		}

	public function tambah()
	{
		$nama_barang = $_POST['nama_barang'];
		$tanggal_input = $_POST['tanggal_input'];
		$nama_file = $_FILES['foto']['nama'];


		if (!empty($nama_file)) {
			$lokasi_file = $_FILES['foto']['tmp_nama'];
			$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
			$file_foto = $nama_barang . ','. $tipe_file;

			$folder = "../images/$file_foto";
			move_uploaded_file($lokasi_file, "$folder");

		}else{
			$file_foto = '.';
		}
	}
}

$action = new aksi();

if (isset($_POST['submit'])) {
	$action->login();
}

if (isset($_POST['tambah'])) {
	$action->tambah();
}