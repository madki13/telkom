<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;1,600&family=REM:wght@300;600&display=swap" rel="stylesheet">
    <style>
       
body, h1, h2, p {
    margin: 30px;
    padding: 30px;
    color: white;
}


body {
    font-family: 'Noto Sans', sans-serif;
    font-family: 'REM', sans-serif;
}

h1 {
    font-weight: 600;
}

nav ul {
    list-style: none;
    display: flex;
    background-color: #333;
}

nav li {
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: white;
}

.header {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
}

.hero {
    color: white;
    padding: 100px 0;
    text-align: center;


    
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

.features {
    display: flex;
    justify-content: space-around;
    padding: 50px 0;
}

.feature {
    flex-basis: 30%;
    text-align: center;
}

.footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
}

.logo-telkom {
            width: 100px;
            margin: 100px;
            margin-left: 100px;
            margin-top: -100px;
            
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Telkom Indonesia</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                
            </ul>
        </nav>
    </header>
    <div class="background-container"></div>
    <section class="hero">
        <h1>Selamat Datang di Telkom Indonesia</h1>
        <p>Menyediakan layanan terbaik untuk kebutuhan komunikasi dan teknologi Anda.</p>
    </section>
    <section class="features">
        <div class="feature">
            <h2>Layanan Terbaik</h2>
            <p>Kami menyediakan berbagai layanan terbaik untuk memenuhi kebutuhan Anda.</p>
        </div>
        <div class="feature">
            <h2>Produk Unggulan</h2>
            <p>Dapatkan produk-produk unggulan kami yang inovatif dan berkualitas tinggi.</p>
        </div>
        <div class="feature">
            <h2>Dukungan 24/7</h2>
            <p>Tim dukungan kami siap membantu Anda 24 jam sehari, 7 hari seminggu.</p>
        </div>
    </section>
    <footer>
        <p>Hak Cipta © 2023 Telkom Indonesia</p>
    </footer>
</body>
</html>
