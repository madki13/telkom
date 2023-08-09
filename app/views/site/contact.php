<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

.utama {
    font-family: 'Poppins', sans-serif;
    margin: 150px auto auto;
}

.text-1 {
    font-weight: 600;
    font-size: 45px;
    justify-content: center;
    width: 330px;
    margin: 0px auto 30px auto;
}

.kolom-kolom {
  width: 80%;
  display: flex;
  gap: 20px;
  margin: 20px auto;
  justify-content: center;
  text-align: center;
  height: 220px;
  
}

.kolom-1,
.kolom-2 {
  background-color: #f8ffff;
  width: 100%;
  border-radius: 5px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  color: #03363d;
}

.judul {
  font-weight: 500;
  font-size: 27px;
  padding-top: 17px;
}

.isi {
  font-weight: 400;
  font-size: 15px;
  padding: 15px 27px 15px 27px;
  text-align: center;
}

.tombol {
  margin-top: 15px;
}

.tombol-whatsapp,
.tombol-email {
  text-decoration: none;
  color: #f8ffff;
  background-color: #03363d;
  padding: 15px 25px 15px 25px;
  border-radius: 50px;
}

.tombol-whatsapp:hover,
.tombol-email:hover {
    text-decoration: none;
    background-color: rgba(23,73,77, 0.9);
    color: rgba(255,255,255, 0.9)
}

.tombol-whatsapp:active,
.tombol-email:active{
    background-color:rgb(23,73,77);
}


</style>
</head>

<div class="utama">
<div class="text-1">Hubungi Kami</div> 
  <div class="kolom-kolom">
    <div class="kolom-1">
      <div class="judul">Whatsapp</div>
      <div class="isi">Silakan hubungi kami melalui WhatsApp untuk pertanyaan atau informasi lebih lanjut.</div>
      <div class="tombol">
        <a class="tombol-whatsapp" href="https://wa.me/081319262710">Whatsapp</a>
      </div>
    </div>
    <div class="kolom-2">
      <div class="judul">Email</div>
      <div class="isi">Kami tersedia melalui email jika Anda memerlukan bantuan atau informasi lebih lanjut.</div>
      <div class="tombol">
        <a class="tombol-email" href="mailto:raaaaygbs@gmail.com">Email</a>
    </div>
  </div>
</div>