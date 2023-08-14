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
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://blog-media.lifepal.co.id/wp-content/uploads/2019/10/28033847/anak-perusahaan-telkom-fb.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            filter: brightness(40%);
            z-index: -1;
        }

        .content-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 100px 0;
            text-align: center;
        }

        .text-container {
            color: white;
            font-size: 24px;
            padding: 40px;
            max-width: 80%;
            margin: 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .logo-telkom {
            width: 100px;
            margin: -70px;
            margin-left: -1200px;
            margin-top: -100px;
        }
    </style>
</head>
<body>
    <div class="background-container"></div>
    <div class="content-container">
        <img class="logo-telkom" src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c4/Telkom_Indonesia_2013.svg/640px-Telkom_Indonesia_2013.svg.png" alt="Logo Telkom Indonesia">
        <div class="text-container">
            <h1>TELKOM INDONESIA</h1>
            <p>the world in your hand</p>
        </div>
    </div>
</body>
</html>
