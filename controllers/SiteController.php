<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use yii\helpers\Html;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public function actionIndex2(){
        return $this->render('index2');
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCalories(){
        return $this->render('calories');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
//    public function actionLogin()
//    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
//
//        $model->password = '';
//        return $this->render('login', [
//            'model' => $model,
//        ]);
//    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionRar(){
        return $this->render('rar');
    }

    public function actionAddAdmin() {
        $model = User::find()->where(['username' => 'admin'])->one();
        if (empty($model)) {
            $user = new User();
            $user->username = 'admin';
            $user->email = 'admin@кодер.укр';
            $user->setPassword('admin');
            $user->generateAuthKey();
            if ($user->save()) {
                echo 'good';
            }
        }
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    public function actionMail()
    {
        $name = Html::encode(Yii::$app->request->post('name'));
        $number = Html::encode(Yii::$app->request->post('number'));
        $email = Html::encode(Yii::$app->request->post('email'));

        // Настраиваем отправку почты
        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru'])
            ->setTo('sabdullaevaa545@gmail.com') // Замените на ваш email
            ->setSubject('Contact Form Submission')
            ->setTextBody("Name: $name\nPhone: $number\nEmail: $email")
            ->send();
        return $this->redirect(['site/index']);
    }
    public function actionMail2()
    {
        $age = Html::encode(Yii::$app->request->post('age'));
        $height = Html::encode(Yii::$app->request->post('height'));
        $weight = Html::encode(Yii::$app->request->post('weight'));
        $desired = Html::encode(Yii::$app->request->post('desired'));
        $activity = Html::encode(Yii::$app->request->post('activity'));
        $energy = Html::encode(Yii::$app->request->post('energy'));
        $weighta = Html::encode(Yii::$app->request->post('weighta'));
        $foods = Html::encode(Yii::$app->request->post('foods'));
        $daily = Html::encode(Yii::$app->request->post('daily'));
        $stress = Html::encode(Yii::$app->request->post('stress'));
        $emotional = Html::encode(Yii::$app->request->post('emotional'));
        $name = Html::encode(Yii::$app->request->post('name'));
        $number = Html::encode(Yii::$app->request->post('number'));
        $email = Html::encode(Yii::$app->request->post('email'));

        // Настраиваем отправку почты
        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru'])
            ->setTo('sabdullaevaa545@gmail.com')
            ->setSubject('Contact Form Submission')
            ->setTextBody("Возраст: $age\nРост: $height\nВес: $weight\nЖелаемый вес: $desired\nФизическая активность: $activity\nЭнерегия: $energy\nЛегкость в похудении: $weighta\nПродукты: $foods\nДень: $daily\nСтресс: $stress\nСъеденное: $emotional\nName: $name\nPhone: $number\nEmail: $email")
            ->send();
        return $this->redirect(['site/index']);
    }
}
