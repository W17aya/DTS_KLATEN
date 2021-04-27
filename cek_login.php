<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
if (isset($_POST['submit'])) 
	{
		$username = isset($_POST['username']) ? $_POST['username']: "";
		$password = isset($_POST['password']) ? $_POST['password']: "";
		$qry= mysqli_query($db,"SELECT * FROM tb_user WHERE user_name = '$username' and user_password='$password'");
		$sesi = mysqli_num_rows($qry);

		if ($sesi >0) 
		{
			$data_admin = mysqli_fetch_array($qry);
			$_SESSION['user_id'] = $data_admin['user_id'];
			$_SESSION['sesi'] = $data_admin['user_name'];

			echo "<script>alert('Anda berhasil Log in'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=index.php?user=$sesi'>";
		}
		else
		{
			echo "<meta http-equiv='refresh' content='0; url=login.php'>";
			echo "<script> alert('Anda Gagal Log in');</script>";
		}
	}
else
{
	include "login.php";
}
?>