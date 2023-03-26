<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>Katrun</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
            $url = 'http://www.omdbapi.com/?apikey=45f49812&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>Katrun</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>Top Kartun</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="gambar1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">GRAVE OF THE FIREFLIES</h5>
        <p class="card-text"> GRAVE OF THE FIREFLIES mengangkat cerita tentang anak-anak korban Perang Dunia II di Jepang, tepatnya ketika bom atom dijatuhkan di kota Hiroshima dan Nagasaki.
Tokoh dalam anime ini bernama Seita dan Setsuko, kakak beradik yang hidupnya penuh dengan kesusahan akibat perang. Hari-hari Seita begitu berat karena harus menghidupi adiknya. Perjuangan hidup Seita dan Setsuko sangat menguras emosi. Hubungan Seita dan Setsuko juga begitu menyentuh dan penuh keharuan. Penonton bakal merasa iba sekaligus simpati menyaksikan perjuangan hidup kakak beradik ini..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="upin.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Upin-ipin</h5>
        <p class="card-text">Upin dan Ipin adalah sosok dua anak kembar yatim piatu. Kedua anak ini tinggal bersama kakak dan neneknya. Pada beberapa episode, diceritakan Upin dan Ipin serta teman-temannya sering mengganggu atau diganggu oleh ayam jago bernama Rambo.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="dora.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Dora</h5>
        <p class="card-text">Dalam setiap petualangannya, Dora selalu ditemani oleh monyet kesayangannya bernama Boots. Kera atau monyet ini sangat lucu dan periang.Awal mula pertemuan Dora dengan Boots adalah saat Dora menemukannya di bawah pohon dan sedang kesepian. Selanjutnya, monyet ini diajak berpetualang bersama mencari jalan melalui peta.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="nemo.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Ikan Nemo</h5>
        <p class="card-text">Nemo adalah ikan badut yang ditemukan oleh Marlin dan Coral, kemudian selamat dari serangan barracuda. Gambar kartun ikan Nemo memiliki ciri dan warna mirip seperti ikan badut aslinya, yaitu berwarna oranye cerah dengan belang berwarna putih.Ikan Nemo atau badut adalah salah satu jenis ikan lautan yang bersimbiosis dengan terumbu karang. Baik terumbu karang atau pun ikan badut sama-sama memperoleh keuntungan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="scoby.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Scooby</h5>
        <p class="card-text">Scooby adalah sosok gambar kartun sekaligus tokoh lucu berupa anjing berwarna cokelat dengan totol-totol hitam. Ia merupakan anjing peliharaan Shaggy yang selalu diajak memecahkan misteri bersama teman-temannya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="mira.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">MIRAI NO MIRA mempunyai</h5>
        <p class="card-text">Tokoh dalam anime ini adalah Kun Oota, seorang anak berusia 4 tahun. Kun Oota merupakan anak kesayangan di keluarganya. Namun kehidupan Kun mulai berubah setelah dia mempunyai seorang adik perempuan bernama Mirai.
Pasalnya, sejak itu kedua orangtua Kun jadi lebih menyayangi Mirai. Lantaran merasa sedih, Kun akhirnya memutuskan pergi  ke sebuah taman. Saat itu, peristiwa ajaib terjadi. Kun bisa bertemu dengan beberapa orang dari masa lalu dan masa depan di kehidupannya, termasuk Mirai dalam usia remaja. Bersama Mirai remaja, Kun akhirnya melakukan sebuah petualangan menakjubkan.<p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>