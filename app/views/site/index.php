<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contoh Menampilkan Background dengan PHP</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0; 
        }

        .background-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://blog-media.lifepal.co.id/wp-content/uploads/2019/10/28033847/anak-perusahaan-telkom-fb.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            filter: brightness(40%);
        }

        .text-container {
            position: relative;
            z-index: 1; 
            color: white; 
            font-size: 24px;
            text-align: center;
            padding: 60px; 
            max-width: 80%; 
            margin: 100px;
        }

        .logo-telkom {
            position: absolute;
            top: 70px;
            left: 20px;
            width: 100px;
            z-index: 2; 
        }
    </style>
</head>
<body>
    <div class="background-container"></div>
    <div class="text-container">
        <h1>TELKOM  INDONESIA </h1>
        <p>the world in your hand</p>
    </div>
    <img class="logo-telkom" src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c4/Telkom_Indonesia_2013.svg/640px-Telkom_Indonesia_2013.svg.png" alt="Logo Telkom Indonesia">
</body>
</html>
