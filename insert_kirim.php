<?php

include "conn.php";


	
        $id_barang = $_POST['id_barang'];
		$nama_pengirim = $_POST['nama_pengirim'];
        $no_hp1 = $_POST['no_hp1'];
		$alamat1=$_POST['alamat1'];
		
		$nama_penerima= $_POST['nama_penerima'];
		$no_hp2 = $_POST['no_hp2'];
        $alamat2=$_POST['alamat2'];
		
		
			$sql="INSERT INTO kirim(id_barang,nama_pengirim,no_hp1,alamat1,nama_penerima,no_hp2,alamat2) VALUES
            ('$id_barang','$nama_pengirim','$no_hp1','$alamat1','$nama_penerima','$no_hp2','$alamat2')";
			$res=mysql_query($sql) or die (mysql_error());
			
            echo "<h3><a href='admin.html'> Kembali ke halaman awal</a></h3>";
			echo "<h3><a href='data_kirim.php'> Lihat ID barang yang baru saja di masukkan </a></h3>";
           

?>