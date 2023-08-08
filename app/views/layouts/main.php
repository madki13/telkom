<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>


    <style>
        .context-dark,
        .bg-gray-dark,
        .bg-primary {
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-classic a,
        .footer-classic a:focus,
        .footer-classic a:active {
            color: #ffffff;
        }

        .nav-list li {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .nav-list li a:hover:before {
            margin-left: 0;
            opacity: 1;
            visibility: visible;
        }

        ul,
        ol {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .social-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding: 23px;
            font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.5);
        }

        .social-container .col {
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-list li a:before {
            content: "\f14f";
            font: 400 21px/1 "Material Design Icons";
            color: #4d6de6;
            display: inline-block;
            vertical-align: baseline;
            margin-left: -28px;
            margin-right: 7px;
            opacity: 0;
            visibility: hidden;
            transition: .22s ease;
        }
    </style>

    <header>
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                //['label' => 'Layanan', 'url' => ['/layanan']],
                ['label' => 'Berita', 'url' => ['/berita']],
                ['label' => 'Testimoni', 'url' => ['/testimoni']],
                ['label' => 'Hubungi Kami', 'url' => ['/site/contact']],
                Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]
                ) : ('<li>'
                    . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
            <div class="row row-30">
                <div class="col-md-4 col-xl-5">
                    <div class="pr-xl-4">
                        <p>ini adalah web profile divisi is & ipn </p>
                        <!-- Rights-->
                        <p class="rights"><span>©  </span><span class="copyright-year">2023</span><span> </span><span>PT Telekomunikasi Indonesia</span><span>. </span><span>All Rights Reserved.</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Hubungi Kami</h5>
                    <dl class="contact-list">
                        <dt>Alamat:</dt>
                        <dd><a href="https://goo.gl/maps/P1r7CRGWcEmkZnWG7"> Jl. Medan Merdeka Sel. No.11, RT.11/RW.2, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110
                            </a></dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>email:</dt>
                        <dd><a href="mailto:corporate_comm@telkom.co.id">corporate_comm@telkom.co.id</a></dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>Nomor Telp:</dt>
                        <dd><a href="https://wa.me/082211371673">+62 822-1137-1673</a></dd>
                    </dl>
                </div>
                <div class="col-md-4 col-xl-3">
                    <h5>Halaman</h5>
                    <?php

                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav'],
                        'items' => [
                            ['label' => 'Beranda', 'url' => ['/site']],
                            ['label' => 'Berita', 'url' => ['/berita']],
                            ['label' => 'Testimoni', 'url' => ['/testimoni']],
                            ['label' => 'Hubungi Kami', 'url' => ['/site/contact']],
                        ],
                    ]);
                    ?>
                </div>


            </div>
        </div>
        <div class="row no-gutters social-container">
            <div class="col"><a class="social-inner" href="https://wa.me/082211371673"><span class="icon mdi mdi-WhatsApp"></span><span>WhatsApp</span></a></div>
            <div class="col"><a class="social-inner" href="mailto:corporate_comm@telkom.co.id"><span class="icon mdi mdi-gmail"></span><span>Gmail</span></a></div>

        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

