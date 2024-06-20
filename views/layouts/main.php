<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php
$this->registerCssFile("@web/css/style.css", [
'depends' => [yii\bootstrap5\BootstrapAsset::class],
]);
?>
<?php $this->beginBody() ?>

<header class="container">
    <div class="head">
        <div class="burger-menu">
             <img src="/img/burger.png" alt="">
        </div>
        <div class="logo">
            <a href="/site/index"> <img src="/img/logo.png" alt=""> </a>
        </div>
        <div>
            <ul class="menu-t">
                <a href=""><li>Menu</li></a>
                <a href=""><li>Delivery</li></a>
                <a href=""><li>FAQ</li></a>
                <a href=""><li>Contacts</li></a>
                <a href="/admin/dish"><li>Admin</li></a>
            </ul>
        </div>
        <div class="info">
            <div class="number">
                <div>
                    <img src="/img/zv.png" alt="">
                </div>
                <p>591 902 883</p>
            </div>
            <div class="language">
                <p>EN</p>
                <div>
                    <img src="/img/str.png" alt="">
                </div>
            </div>
        </div>

        <div class="login">
            <?php if (Yii::$app->user->isGuest): ?>
                <button id="menuButton"><img src="/img/login.png" alt=""></button>
                <div id="dropdown" class="dropdown-content">
                    <a href="#" id="signupLink">Sign Up</a>
                    <a href="#" id="loginLink">Login</a>
                </div>
            <?php else: ?>
                <a class="log"  href="<?= \yii\helpers\Url::to(['site/logout']) ?>" data-method="post">Logout</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<div id="signupPopup" class="popup">
    <div class="popup-content">
        <span class="close" id="closeSignup">&times;</span>
        <?php
        $signupModel = new \app\models\SignupForm();
        $form = ActiveForm::begin([
            'id' => 'form-signup',
            'action' => ['/site/signup'],
        ]);
        echo $form->field($signupModel, 'username')->textInput(['id' => 'signupName']);
        echo $form->field($signupModel, 'email')->textInput(['id' => 'signupEmail']);
        echo $form->field($signupModel, 'password')->passwordInput(['id' => 'signupPassword']);
        ?>
        <div class="form-group">
            <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<!--<div id="loginPopup" class="popup">-->
<!--    <div class="popup-content">-->
<!--        <span class="close" id="closeLogin">&times;</span>-->
<!--        --><?php
//        $loginModel = new \app\models\LoginForm();
//        $form = ActiveForm::begin([
//            'id' => 'form-login',
//            'action' => ['/site/login'],
//        ]);
//        echo $form->field($loginModel, 'username')->textInput(['id' => 'loginName']);
//        echo $form->field($loginModel, 'password')->passwordInput(['id' => 'loginPassword']);
//        ?>
<!--        <div class="form-group">-->
<!--            --><?php //= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
<!--        </div>-->
<!--        --><?php //ActiveForm::end(); ?>
<!--    </div>-->
<!--</div>-->

<div id="loginPopup" class="popup">
    <div class="popup-content">
        <span class="close" id="closeLogin">&times;</span>
        <?php
        $loginModel = new \app\models\LoginForm();
        $form = ActiveForm::begin([
            'id' => 'form-login',
            'action' => ['/site/login'],
            'enableClientValidation' => true,
            'enableAjaxValidation' => false,
        ]);
        echo $form->field($loginModel, 'username')->textInput(['id' => 'loginName']);
        echo $form->field($loginModel, 'password')->passwordInput(['id' => 'loginPassword']);
        ?>
        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<?= $content ?>

<!---->
<?php
//echo Nav::widget([
//    'options' => ['class' => 'navbar-nav navbar-right'],
//    'items' => [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'Admin Panel', 'url' => ['/admin/dish']],
//        Yii::$app->user->isGuest ? (
//        ['label' => 'Login', 'url' => ['/site/login']]
//        ) : (
//            '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>'
//        )
//    ],
//]);
//?>
<footer id="container2">
    <div class="foot container">
        <div>
            <img class="img-1" src="/img/logo 2.png" alt="">
        </div>
        <div>
            <ul>
                <a href=""><li>Menu</li></a>
                <a href=""><li>Delivery</li></a>
                <a href=""><li>FAQ</li></a>
                <a href=""><li>Contacts</li></a>
            </ul>
        </div>
        <div >
            <img class="img-2" src="/img/foot1.png" alt="">
        </div>
    </div>
</footer>

<style>
    #menuButton {
        margin-top: -3px;
        padding: 5px;
        font-size: 16px;
        background-color: #FFA800;
        border: none;
        border-radius: 15px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .popup {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
        padding-top: 60px;
    }

    .popup-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 400px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    form {
        display: flex;
        flex-direction: column;
    }

     input, button {
        margin: 10px 0;
    }
    .log{
        text-decoration: none;
        color: black;
        font-weight: 500;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuButton = document.getElementById('menuButton');
        const dropdown = document.getElementById('dropdown');
        const signupLink = document.getElementById('signupLink');
        const loginLink = document.getElementById('loginLink');
        const signupPopup = document.getElementById('signupPopup');
        const loginPopup = document.getElementById('loginPopup');
        const closeSignup = document.getElementById('closeSignup');
        const closeLogin = document.getElementById('closeLogin');

        menuButton.addEventListener('click', () => {
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });

        signupLink.addEventListener('click', () => {
            signupPopup.style.display = 'block';
            dropdown.style.display = 'none';
        });

        loginLink.addEventListener('click', () => {
            loginPopup.style.display = 'block';
            dropdown.style.display = 'none';
        });

        closeSignup.addEventListener('click', () => {
            signupPopup.style.display = 'none';
        });

        closeLogin.addEventListener('click', () => {
            loginPopup.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (event.target === signupPopup) {
                signupPopup.style.display = 'none';
            } else if (event.target === loginPopup) {
                loginPopup.style.display = 'none';
            }
        });
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
