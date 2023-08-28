<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-container.w3-center {
  padding: 180px 16px;
}

/* Increase padding in first content section */
.w3-pale-red.w3-padding-64 {
  padding: 120px 0;
}

/* Increase padding in second content section */
.w3-light-grey.w3-padding-64 {
  padding: 2000px 0;
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-wifi,.fa-signal {font-size:200px}

body{
  background-image: url('https://i0.wp.com/pmb.ittelkom-pwt.ac.id/wp-content/uploads/2020/06/TELKOM-LANDMARK-TOWER-2.jpg?ssl=1'); 
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

body::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); 
  filter: brightness(80%); 
  z-index: -1;

}
body {
  color: white;
}   

.w3-jumbo {
  font-size: 10px; 
}

</style>
</head>
<body>


<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Link 4</a>
  </div>

  
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>


<header class="w3-container w3-center" style="padding:128px 16px">
<img src="https://www.telkom.co.id/data/image_upload/page/1594113058432_compress_PNG%20Logo%20Reverse%20Primer%20Telkom.png" class="w3-round" alt="TELKOM" style="position: absolute; top: 60px; left: 20px; width: 100px; height: auto;">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Logo_BUMN_Untuk_Indonesia_2020.svg/2560px-Logo_BUMN_Untuk_Indonesia_2020.svg.png" class="w3-round" alt="TELKOM" style="position: absolute; top: 60px; right: 20px; width: 120px; height: auto;">
  <h1 class="w3-margin w3-jumbo">TELKOM INDONESIA</h1>
    <h1 class="w3-margin w3-jumbo"> THE WORLD IN YOUR HAND</h1>
  <p class="w3-xlarge">WELOME TO OUR WEBSITE </p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>


<div class="w3-row-padding w3-pale-red w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Tentang Telkomgroup</h1>
      <h5 class="w3-padding-32">TENTANG TELKOMGROUP</h5>

      <p class="w3-text-black">LPT Telkom Indonesia (Persero) Tbk (Telkom) adalah Badan Usaha Milik Negara (BUMN) yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di Indonesia. Pemegang saham mayoritas Telkom adalah Pemerintah Republik Indonesia sebesar 52.09%, sedangkan 47.91% sisanya dikuasai oleh publik. Saham Telkom diperdagangkan di Bursa Efek Indonesia (BEI) dengan kode “TLKM” dan New York Stock Exchange (NYSE) dengan kode “TLK”.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-wifi w3-padding-64 w3-text-red w3-size-48 "></i>
      
    </div>
  </div>
</div>


<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-signal w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>TELKOM INDONESIA</h1>
      <h5 class="w3-padding-32">visi misi telkom</h5>

      <p class="w3-text-black">VISIMenjadi digital telco pilihan utama untuk memajukan masyarakat
MISIMempercepat pembangunan Infrastruktur dan platform digital cerdas yang berkelanjutan, ekonomis, dan dapat diakses oleh seluruh masyarakat.
Mengembangkan talenta digital unggulan yang membantu mendorong kemampuan digital dan tingkat adopsi digital bangsa.
Mengorkestrasi ekosistem digital untuk memberikan pengalaman digital pelanggan terbaik
 </p>
    </div>
  
        </div>
    </section>
  </div>
</div>


 </div>
</footer>

<script>

function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>