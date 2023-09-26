<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;1,600&family=Poppins:ital,wght@0,200;0,400;1,200;1,300;1,500;1,800&family=REM:wght@300;600&family=Source+Code+Pro:ital,wght@1,500&display=swap" rel="stylesheet">
  <title>Perusahaan XYZ</title>
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    .wrapper {
      background: url(https://digitalbisa.id/56tahun/img/sejarah-bawah-gedung.png );
      background-size: cover;
      height: 100vh;
      margin: -70px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      background-color: lightgray;
     
    }

    .center {
      position: absolute;
      top: 30%;
      left: 14%;
      padding: 20px;


    }

    .center h1 {
      display: block;
      text-align: center;
      font-size: 55px;
      font-family: 'Poppins', sans-serif;
      font-weight: 800;
    }

    .center h2 {
      display: block;
      text-align: center;
      font-size: 50px;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
    }

    .center h5 {
      display: block;
      text-align: center;
      font-size: 25px;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
    }

    .bagian {
      padding-top: 150px;
      display: block;
      text-align: center;
    }

    .text-bagian {
      font-size: 36px;
      font-weight: 700;
    }

    .isi {
      display: flex;
      margin-top: 4%;
      justify-content: space-between;
      padding: 60px;
      

    }

    .content {
      color: white;
      flex-basis: 31%;
      background-color: #c91717;
      border-radius: 10px;
      padding: 30px 20px;
      box-sizing: border-box;
      text-align: center;
      font-family: 'Poppins', sans-serif;
      box-shadow: 0px 0px 96px -11px rgba(0,0,0,0.56);
    }

    .judul-content {
      font-weight: 600;
      font-size: 27px;
    }
    .struktur{
        align-items: center;
        margin-top: 100px;
    }
    .struktur img{
      max-width: 200px;
      margin-right: 20px;
      margin-top: -60px;
      margin-left: 50px;
    }
    .struktur h6{
      margin: 0;
      margin-top: -110px;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
      font-size: 40px;
      display: flex;
      margin-left: 270px;
      

    }
    .struktur p1{
      margin-left: -140px;
      font-family: 'Poppins', sans-serif;
      font-size: 18px;
      display: flex;
      margin-left: 270PX;
      margin-top: 35px;
      

    }

    .pound{
      width: 80%;
      margin: auto;
      text-align: center;
      padding-top: 100px;
      padding: 30px;
      margin-top: -100px;

    }
    .pound img{
      width: 100%;
      border-radius: 10px;
      box-shadow: 10px 18px 38px -3px rgba(153,153,153,0.98);
    }

    .judul-pound {
      margin-top: 20px;

    }

  
    .utopia h7{
      display: block;
      text-align: center;
      font-size: 40px;
      font-family: 'Poppins', sans-serif;

    }
    .utopia p2{
      display: block;
      text-align: center;
      font-size: 20px;
      font-family: 'Poppins', sans-serif;
    }
    
    .profile{
      width: 80%;
      margin: auto;
      text-align: center;
      padding-top: 100px;
      padding: 30px;
      margin-top: -100px;

    }

    .profile img{
      width: 40%;
      border-radius: 50%;

    }

    .bihan{
      width: 80%;
      margin: auto;
      text-align: center;
      padding-top: 100px;
      padding: 30px;
      margin-top: -100px;
    }

    .bihan img{
      width: 20%;
      border-radius: 50%;

    }

    .center img{
      width: 20%;
      margin-top: -15%;
      margin-left: -15%
    }


    /* .block-merah {
      width: 100%;
      height: 10vh;
      background-color: #c91717;
      margin-bottom: 30px;
    } */

    * {
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}
.struktur-perusahaan {
	height: 72vh;
	display: grid;
	align-items: center;
	font-family: 'Poppins', sans-serif;
  margin-bottom: 100px;
}
.tree {
	width: 100%;
	height: auto;
	text-align: center;
}
.tree ul {
	padding-top: 20px;
	position: relative;
	transition: .5s;
}
.tree li {
	display: inline-table;
	text-align: center;
	list-style-type: none;
	position: relative;
	padding: 10px;
	transition: .5s;
}
.tree li::before, .tree li::after {
	content: '';
	position: absolute;
	top: 0;
	right: 50%;
	border-top: 1px solid #ccc;
	width: 51%;
	height: 10px;
}
.tree li::after {
	right: auto;
	left: 50%;
	border-left: 1px solid #ccc;
}
.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}
.tree li:only-child {
	padding-top: 0;
}
.tree li:first-child::before, .tree li:last-child::after {
	border: 0 none;
}
.tree li:last-child::before {
	border-right: 1px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after {
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}
.tree ul ul::before {
	content: '';
	position: absolute;
	top: 0;
	left: 50%;
	border-left: 1px solid #ccc;
	width: 0;
	height: 20px;
}
.tree li a {
	border: 1px solid #ccc;
	padding: 10px;
	display: inline-grid;
	border-radius: 5px;
	text-decoration-line: none;
	border-radius: 5px;
	transition: .5s;
}
.tree li a img {
	width: 50px;
	height: 50px;
	margin-bottom: 10px !important;
	border-radius: 100px;
	margin: auto;
}
.tree li a span {
	border: 1px solid #ccc;
	border-radius: 5px;
	color: #666;
	padding: 8px;
	font-size: 12px;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 500;
}
.tree li a:hover, .tree li a:hover i, .tree li a:hover span, .tree li a:hover+ul li a {
	background: #c8e4f8;
	color: #000;
	border: 1px solid #94a0b4;
}
.tree li a:hover+ul li::after, .tree li a:hover+ul li::before, .tree li a:hover+ul::before, .tree li a:hover+ul ul::before {
	border-color: #94a0b4;
}
  </style>
</head>

<body>
  <div class="wrapper"> </div>
  <div class="center">
    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c4/Telkom_Indonesia_2013.svg/1200px-Telkom_Indonesia_2013.svg.png" alt="">
    <h1> TELKOM STO GAMBIR</h1>
    <h2>THE WORLD IN YOUR HAND</h2>
    <h5> WELCOME TO OUR WEBSITE</h5>
  </div>
  <div class="bagian">
    <h3 class="text-bagian">
      SEPUTAR TELKOM INDONESIA
    </h3>
  </div>
  <div class="isi">
    <div class="content">
      <h4 class="judul-content">TELKOM</h4>
      <p> Telkom Indonesia adalah penyedia layanan telekomunikasi yang menyediakan berbagai layanan seperti telepon tetap, telepon seluler, internet, dan layanan data.</p>
    </div>
    <div class="content">
      <h4 class="judul-content">SEJARAH</h4>
      <p>Telkom Indonesia didirikan pada tahun 1856 dan sejak itu telah berkembang menjadi perusahaan terkemuka di industri telekomunikasi Indonesia. Perusahaan ini memiliki misi untuk menyediakan layanan telekomunikasi berkualitas tinggi kepada pelanggan di seluruh Indonesia.</p>
    </div>
    <div class="content">
      <h4 class="judul-content">VISI</h4>
      <p> Dengan visi untuk menjadi Digital Telecommunication Company of the Region, Telkom Indonesia terus berinovasi dan berinvestasi dalam teknologi terbaru untuk memenuhi kebutuhan pelanggan di era digital.</p>
    </div>
  </div>

  <div class="struktur">
    <img src="https://www.telkom.co.id/data/image_upload/page/1594112895830_compress_PNG%20Icon%20Telkom.png" alt="">
    <h6> Apa itu IS dan IPN dan Swtiching?</h6>
    <p1> </p1>
    
  </div>
  
  <div class="isi">
    <div class="pound">
      <img src="https://ik.trn.asia/uploads/2021/08/1627894603712.jpeg" alt="">
      <h4 class="judul-pound">IS</h4>
      <p> IS, unit kerja di bawah TELKOM STO Gambir, bertanggung jawab atas instalasi dan pengelolaan infrastruktur jaringan, jaringan telekomunikasi, dan seat management perangkat elektronik (laptop, desktop, printer, dan infocus) di seluruh gedung TELKOM.</p>
    </div>
    <div class="pound">
      <img src="https://digitaltransformation.co.id/wp-content/uploads/2023/03/young-man-engineer-making-program-analyses-1-1.jpg" alt="">
      <h4 class="judul-pound">IPN</h4>
      <p>IPN, unit kerja di bawah TELKOM STO Gambir, bertanggung jawab atas pemeliharaan jaringan metro di seluruh wilayah kerja Witel Jakarta Pusat.     </p>
    </div>
    <div class="pound">
      <img src="https://plus.unsplash.com/premium_photo-1683134221762-25385482e8ac?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wxMjA3fDB8MXxzZWFyY2h8NDB8fGNhYmxlJTIwbGluZXxlbnwwfHx8fDE2ODgxNDU5NjJ8MQ&ixlib=rb-4.0.3&q=80&w=1080" alt="">
      <h4 class="judul-pound">Switching</h4>
      <p>Proses menghubungkan satu atau lebih perangkat untuk melakukan komunikasi. Perangkat tersebut dapat berupa terminal, seperti telepon, komputer, atau perangkat lainnya. </p>
    </div>
  </div>

  <div class="block-merah"></div>

  <div class="utopia">
    <h7> STRUKTUR BIDANG IS, IPN, Switching</h7>
    <p2>Struktur bagian IS, IPN, Switching di Telkom Gambir</p2>
  </div>

 

    <div class="struktur-perusahaan">
		<div class="filipo">
			<div class="pipo">
				<div class="tree">
        <ul>
						<li> <a><span>GM WITEL JAKPUS</span></a>
					<ul>
					<ul>
          <li> <a><img src="https://cdn-icons-png.flaticon.com/512/4792/4792929.png"><span>Ahmad Mulyono</span></a>
					<ul>
						<li> <a><img src="https://cdn-icons-png.flaticon.com/512/4792/4792929.png"><span>Riyanto</span></a>
					<ul>
							<li> <a><img src="https://cdn-icons-png.flaticon.com/512/180/180658.png"><span>Billy</span></a> </li>
							<li> <a><img src="https://cdn-icons-png.flaticon.com/512/180/180658.png"><span>Bintang</span></a> </li>
							<li> <a><img src="https://cdn-icons-png.flaticon.com/512/6833/6833591.png"><span>karyawan Ketiga</span></a> </li>
							<li> <a><img src="https://cdn-icons-png.flaticon.com/512/180/180658.png"><span>karyawan Keempat</span></a> </li>
					</ul>
					</li>

				
				</ul>
			</li>
		</ul>
	</div>
</div>
</div>
</div>
</html>

  







  



</body>