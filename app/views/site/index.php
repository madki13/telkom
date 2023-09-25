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
      height: 110vh;
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
      font-size: 55px;
      width: 900px;
      text-align: center;
      font-family: 'Poppins', sans-serif;
      margin-left: 20px;
      font-weight: 800;


    }

    .center h2 {
      font-size: 50px;
      width: 885px;
      margin-top: 10px;
      text-align: center;
      font-family: 'Poppins', sans-serif;
      margin-left: 22px;
      font-weight: 800;
    }

    .center h5 {
      font-size: 25px;
      font-weight: 800;
      margin-left: 280px;
      font-family: 'Poppins', sans-serif;
    }

    .bagian {
      padding-top: 100Px;
      font-size: 30px;
      margin-left: 470px;

    }

    .isi {
      display: flex;
      margin-top: 5%;
      justify-content: space-between;
      padding: 60px;

    }

    .content {
      flex-basis: 31%;
      background-color: #FF6A61;
      border-radius: 10px;
      padding: 20px 10px;
      box-sizing: border-box;
      text-align: center;
      font-family: 'Poppins', sans-serif;
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
      margin-top: -150px;
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
    }

    

    .utopia h7{
      font-size: 40px;
      margin-top: 5px;
      margin-left: 380px;
      font-family: 'Poppins', sans-serif;
      padding: 100px;
    }
    .utopia p2{
      font-size: 20px;
      margin-top: 100px;
      margin-left: 480px;
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
    * {
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}
.struktur-perusahaan {
	height: 100vh;
	display: grid;
	align-items: center;
	font-family: 'Poppins', sans-serif;
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
    <h3>
      SEPUTAR TELKOM INDONESIA
    </h3>
  </div>
  <div class="isi">
    <div class="content">
      <h4>TELKOM</h4>
      <p> Telkom Indonesia adalah penyedia layanan telekomunikasi yang menyediakan berbagai layanan seperti telepon tetap, telepon seluler, internet, dan layanan data.</p>
    </div>
    <div class="content">
      <h4>SEJARAH</h4>
      <p>Telkom Indonesia didirikan pada tahun 1856 dan sejak itu telah berkembang menjadi perusahaan terkemuka di industri telekomunikasi Indonesia. Perusahaan ini memiliki misi untuk menyediakan layanan telekomunikasi berkualitas tinggi kepada pelanggan di seluruh Indonesia.</p>
    </div>
    <div class="content">
      <h4>VISI</h4>
      <p> Dengan visi untuk menjadi Digital Telecommunication Company of the Region, Telkom Indonesia terus berinovasi dan berinvestasi dalam teknologi terbaru untuk memenuhi kebutuhan pelanggan di era digital.</p>
    </div>
  </div>

  <div class="struktur">
    <img src="https://www.telkom.co.id/data/image_upload/page/1594112895830_compress_PNG%20Icon%20Telkom.png" alt="">
    <h6> Apa itu IS dan IPN?</h6>
    <p1> IS adalah bagian dari TELKOM STO GAMBIR yaitu menangani instalsai infrasturuktur jaringan jaringan network telekomunikasi dan seatmanajemen laptop dekstop printer dan infokus digedung TELKOM. IPN mentenes metro untuk witel jakarta pusat </p1>
    
  </div>
  
  <div class="isi">
    <div class="pound">
      <img src="https://ik.trn.asia/uploads/2021/08/1627894603712.jpeg" alt="">
      <h4>COFFE MORNING</h4>
      <p> Telkom Indonesia adalah penyedia layanan telekomunikasi yang menyediakan berbagai layanan seperti telepon tetap, telepon seluler, internet, dan layanan data.</p>
    </div>
    <div class="pound">
      <img src="https://digitaltransformation.co.id/wp-content/uploads/2023/03/young-man-engineer-making-program-analyses-1-1.jpg" alt="">
      <h4>NETWORKING</h4>
      <p>Telkom Indonesia didirikan pada tahun 1856 dan sejak itu telah berkembang menjadi perusahaan terkemuka di industri telekomunikasi Indonesia. Perusahaan ini memiliki misi untuk menyedi.</p>
    </div>
    <div class="pound">
      <img src="https://plus.unsplash.com/premium_photo-1683134221762-25385482e8ac?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wxMjA3fDB8MXxzZWFyY2h8NDB8fGNhYmxlJTIwbGluZXxlbnwwfHx8fDE2ODgxNDU5NjJ8MQ&ixlib=rb-4.0.3&q=80&w=1080" alt="">
      <h4>VISI</h4>
      <p> Dengan visi untuk menjadi Digital Telecommunication Company of the Region, Telkom Indonesia terus berinovasi dan berinvestasi dalam teknon</p>
    </div>
  </div>

  <div class="utopia">
    <h7> STRUKTUR BIDANG IS</h7>
    <p2> inilah beberapa struktur bagian is di telkom gambir</p2>
  </div>

 

    <div class="struktur-perusahaan">
		<div class="filipo">
			<div class="pipo">
				<div class="tree">
					<ul>
						<li> <a href="#"><span>GM WITEL JAKPUS</span></a>
						<ul>
						<li> <a href="#"><img src="images/5.jpg"><span>Necromancer</span></a>
						<ul>
							<li> <a href="#"><img src="images/1.jpg"><span>Beliau Pertama</span></a> </li>
							<li> <a href="#"><img src="images/2.jpg"><span>Beliau Kedua</span></a> </li>
							<li> <a href="#"><img src="images/3.jpg"><span>Beliau Ketiga</span></a> </li>
							<li> <a href="#"><img src="images/4.jpg"><span>Beliau Keempat</span></a> </li>
							
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