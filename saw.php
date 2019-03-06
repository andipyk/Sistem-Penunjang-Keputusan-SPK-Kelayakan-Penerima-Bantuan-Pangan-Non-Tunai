<?php


/**
*
Deskripsi :
	-) berisi koneksi ke database localhost
*/
class saw
{
	
	function __construct()
	{
		//Koneksi host = "localhost" , nama database "sawer", username "root", password "" (kosong sebagai default)
		$this->db= new PDO('mysql:host=localhost;dbname=sawer',"root","");
    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sawer";
    $conn = mysqli_connect($servername, $username, $password, $dbname);*/

	}

	public function get_data_kriteria(){
    $lihatdb = $this->db->prepare("SELECT*FROM tabel_kriteria ORDER BY  id_kriteria");
    $lihatdb->execute();
	return $lihatdb;
  }

    public function get_data_keluarga(){
    $lihatdb = $this->db->prepare("SELECT*FROM tabel_keluarga ORDER BY nik");
    $lihatdb->execute();
    return $lihatdb;
  }
  public function get_data_bobot(){
    $lihatdb = $this->db->prepare("SELECT*FROM tabel_faktor ORDER BY id_faktor");
    $lihatdb->execute();
    return $lihatdb;
  }
  
 /* faktor bobot c1-c25*/
  public function get_data_kriteria_id($id){
    $stmt = $this->db->prepare("SELECT*FROM tabel_faktor WHERE id_faktor='$id' ORDER BY id_faktor");
    $lihatdb->execute();
		return $lihatdb;
  }

  //get data nilai -> matrix
 public function get_data_nilai_id($id){
    $lihatdb = $this->db->prepare("SELECT c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12, c13, c14, c15, c16, c17, c18, c19, c20, c21, c22, c23, c24, c25
	FROM matrix_table WHERE nik='$id' ORDER BY nik");
    $lihatdb->execute();
    return $lihatdb;
  }

  //nilai max -> matrix
  public function nilai_max(){
    $lihatdb = $this->db->prepare("SELECT nik,
    	MAX(c1) AS max1, 
    	MAX(c2) AS max2, 
    	MAX(c3) AS max3, 
    	MAX(c4) AS max4, 
    	MAX(c5) AS max5, 
    	MAX(c6) AS max6, 
    	MAX(c7) AS max7, 
    	MAX(c8) AS max8, 
    	MAX(c9) AS max9, 
    	MAX(c10) AS max10, 
    	MAX(c11) AS max11, 
    	MAX(c12) AS max12, 
    	MAX(c13) AS max13, 
    	MAX(c14) AS max14, 
    	MAX(c15) AS max15, 
    	MAX(c16) AS max16, 
    	MAX(c17) AS max17, 
    	MAX(c18) AS max18, 
    	MAX(c19) AS max19, 
    	MAX(c20) AS max20, 
    	MAX(c21) AS max21, 
    	MAX(c22) AS max22, 
    	MAX(c23) AS max23, 
    	MAX(c24) AS max24, 
    	MAX(c25) AS max25 FROM matrix_table");
    $lihatdb->execute();
    return $lihatdb;
  }
  //nilai min -> matrix
    public function nilai_min($id){
    $stmt = $this->db->prepare("SELECT nik, MIN(c1), MIN(c2), MIN(c3), MIN(c4), MIN(c5), MIN(c6), MIN(c7), MIN(c8), MIN(c9), MIN(c10), MIN(c11), MIN(c12), MIN(c13), MIN(c14), MIN(c15), MIN(c16), MIN(c17), MIN(c18), MIN(c19), MIN(c20), MIN(c21), MIN(c22), MIN(c23), MIN(c24), MIN(c25) AS min FROM matrix_table WHERE nik='$id' GROUP BY nik");
    $lihatdb->execute();
    return $lihatdb;
  }

  public function insertNormalisasi($nik, $jumlah, $kelayakan) {

        $sql = "INSERT INTO kelayakan (NIK, Skor, Status) VALUES ( $nik ,$jumlah, $kelayakan)";
        $this->query = $this->pdo->prepare($sql);
        $this->query->execute();
       // return self::$pdo->prepare($sql);
    }
}

?>