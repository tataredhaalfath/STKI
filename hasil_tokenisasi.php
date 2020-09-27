<?php
//membuat koneksi ke database
$host='localhost';
$user='id14976533_dbstbi1';
$pass='wI4q5A!9Y_%Ovwqu';
$database='id14976533_dbstbi';

$conn=new mysqli($host,$user,$pass,$database) or die('MySql Tidak Connect');
?>

<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
	
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="upload.php">Upload</a>
            <a class="nav-link" href="query.php">Query</a>
            <a class="nav-link active " href="hasil_tokenisasi.php">Hasil Tokenisasi</a>
          </div>
        </div>
    </nav>
    <!-- ahir havbar -->
<center> 
HASIL TOKENISASI DAN STEMMING
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->



<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter</th>
    <th> Stemming Nazief Adriel</th>
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From dokumen" ;  //menampikan SEMUA


$hasil=mysqli_query ($conn, $queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
$id = $data['dokid'];
 echo "    
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['token']."</td>
        <td>".$data['tokenstem']."</td>
        <td>".$data['tokenstem2']."</td>
        </tr> 
        ";
        
}

?>

</table>
</body>
</html>