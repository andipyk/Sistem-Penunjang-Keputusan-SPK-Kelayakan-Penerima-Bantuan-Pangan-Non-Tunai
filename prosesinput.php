	<?php
	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Not connected : ' . mysql_error());
	}

							// make sawer the current db
	$db_selected = mysql_select_db('sawer', $link);
	if (!$db_selected) {
		die ('Can\'t use sawer : ' . mysql_error());
	}

	if (isset($_POST['no_kk'])) {
		$no_kk = $_POST['no_kk'];
		$nama_kk = $_POST['nama_kk'];
		$alamat = $_POST['alamat'];
		//echo $no_kk."  ".$nama_kk;

		$c1		= $_POST['c1']; 
		$c2		= $_POST['c2']; 
		$c3		= $_POST['c3']; 
		$c4		= $_POST['c4']; 
		$c5		= $_POST['c5']; 
		$c6		= $_POST['c6']; 
		$c7		= $_POST['c7']; 
		$c8		= $_POST['c8']; 
		$c9		= $_POST['c9']; 
		$c10	= $_POST['c10']; 
		$c11	= $_POST['c11']; 
		$c12	= $_POST['c12']; 
		$c13	= $_POST['c13']; 
		$c14	= $_POST['c14']; 
		$c15	= $_POST['c15']; 
		$c16	= $_POST['c16']; 
		$c17	= $_POST['c17']; 
		$c18	= $_POST['c18']; 
		$c19	= $_POST['c19']; 
		$c20	= $_POST['c20']; 
		$c21	= $_POST['c21']; 
		$c22	= $_POST['c22']; 
		$c23	= $_POST['c23']; 
		$c24	= $_POST['c24']; 
		$c25	= $_POST['c25'];


		$insert_kk = "INSERT INTO  tabel_keluarga ( nik ,  nama ,  alamat ) VALUES ('$no_kk', '$nama_kk', '$alamat')";
		$insert_matriks = "INSERT INTO  matrix_table ( nik ,  c1 ,  c2 ,  c3 ,  c4 ,  c5 ,  c6 ,  c7 ,  c8 ,  c9 ,  c10 ,  c11 ,  c12 ,  c13 ,  c14 ,  c15 ,  c16 ,  c17 ,  c18 ,  c19 ,  c20 ,  c21 ,  c22 ,  c23 ,  c24 ,  c25 ) VALUES ('$no_kk', '$c1', '$c2', '$c3', '$c4', '$c5', '$c6', '$c7', '$c8', '$c9', '$c10', '$c11', '$c12', '$c13', '$c14', '$c15', '$c16', '$c17', '$c18', '$c19', '$c20', '$c21', '$c22', '$c23', '$c24', '$c25')"; 
		
		$hasil = mysql_query($insert_kk)or die(mysql_error());
							if($insert_kk){  
								//echo "Data Tersimpan <br>";  
							}else{  
								echo "Error! gagal menyimpan".mysql_error();  
							}

		$hasil2 = mysql_query($insert_matriks)or die(mysql_error());
							if($insert_kk){  
								
								 echo "<script>alert('Data Tersimpan');window.location='index.php'</script>";
							}else{  
								echo "Error! gagal menyimpan".mysql_error();  
							}						
	}

	?>