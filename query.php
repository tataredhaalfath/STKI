<html>
<head>
<title>Query</title>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="upload.php">Upload</a>
            <a class="nav-link active" href="query.php">Query</a>
            <a class="nav-link " href="hasil_tokenisasi.php">Hasil Tokenisasi</a>
          </div>
        </div>
    </nav>
    <!-- ahir havbar -->
<form enctype="multipart/form-data" method="POST" action="hasilquery.php">
Keyword : <br>
<input type="text" name="katakunci"><br>
<input type=submit>
</form>