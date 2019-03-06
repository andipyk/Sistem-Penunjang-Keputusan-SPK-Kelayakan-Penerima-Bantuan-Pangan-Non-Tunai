		<?php
		spl_autoload_register(function($class){
			require_once $class.'.php';
		});

		$saw = new saw();
		?>

		View Keluarga Matrix

		<!-- Tabel Nama + C25 -->
		<h2>Kriteria</h2>
		<table border="1" cellspacing="0" width="1200" height="400">
			<tr>
				<th>Nama KK</th>
				<?php 
				$loop = 1;
				while ( $loop <= 25) {

					echo "<th>C".$loop."</th>";
					$loop++;
				}
				?>
			</tr>

			<?php
			$keluarga = $saw->get_data_keluarga();
			while ($data_keluarga = $keluarga->fetch(PDO::FETCH_ASSOC)) {
				?>
				<tr>
					<td><center><?php echo $data_keluarga['nama']; ?></center></td>
					<?php
					$nilai = $saw->get_data_nilai_id($data_keluarga['nik']);
					while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) {
						
							?>    
							<td><center>
								<?php echo $data_nilai['c1']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c2']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c3']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c4']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c5']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c6']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c7']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c8']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c9']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c10']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c11']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c12']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c13']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c14']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c15']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c16']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c17']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c18']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c19']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c20']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c21']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c22']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c23']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c24']; ?>
							</center></td>
							<td><center>
								<?php echo $data_nilai['c25']; ?>
							</center></td>
							
							<?php 

					} ?>

				</tr>

				<?php } ?>
			</table>
			<br><br><br>
<!-- ====================================================================================================== -->
			<h2>Bobot</h2>
<table border="1" cellspacing="0" height="200" width="600">

  <tr>
    <th>Nama Faktor</th>
    <th>Bobot</th>
  <tr>
  <?php
  $bobot = $saw->get_data_bobot();
  while ($data_bobot = $bobot->fetch(PDO::FETCH_ASSOC)) {
  ?>
      <tr><td><?php echo $data_bobot['nama_faktor']; ?></td>
      	 <td><?php echo $data_bobot['bobot']; ?></td>
      	</tr>

  <?php } ?>

</table>
  <br><br>



			<br><br><br>
  <br><br>
			<hr>



		<!-- 	View Keluarga Normalisasi

		Tabel Nama + C25

		View Bobot C1-C25

		Tabel 2 Kolom


		View Keluarga Rangking -->