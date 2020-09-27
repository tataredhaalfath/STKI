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
            <a class="nav-link " href="hasil_tokenisasi.php">Hasil Tokenisasi</a>
          </div>
        </div>
    </nav>
    <!-- ahir havbar -->
<center> 
HASIL Query
<br>
<br>
<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->
<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter</th>
</tr>

 <?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$servername = "localhost";
$username = "id14976533_dbstbi1";
$password = "wI4q5A!9Y_%Ovwqu";
$dbname = "id14976533_dbstbi";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=$_POST['katakunci'];
$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` where token like '%$hasil%'";
// $sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";


echo $sql;
$result = $conn->query($sql);

if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "    
        <tr>
        <td>".$row['nama_file']."</td>
        <td>".$row['token']."</td>
        <td>".$row['tokenstem']."</td>
  
        </tr> 
        ";
        
    }
} else {
    echo "0 results";
}
$conn->close();

///

?>
</table>
</center>
</html>

