<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Contact;
use app\models\EventBallad;
use app\models\Shows;

class SiteController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions() {
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

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }
    

    public function actionLogout() {
        Yii::$app->user->logout();
        $model = new LoginForm();
        $this->layout = 'index';
        return $this->render('login', ['model' => $model]);
        }
        
        



        public function actionContactForm() {

        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
        Yii::$app->session->setFlash('contactFormSubmitted');

        return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    public function actionBuscar($termo = null) {
        if ($termo) {
            $baladas = EventBallad::find()->andFilterWhere(['like', 'name', $termo])->all();
            $shows = Shows::find()->andFilterWhere(['like', 'name', $termo])->all();
        } else {
            $baladas = EventBallad::find()->all();
            $shows = Shows::find()->all();
        }
        $eventos = array_merge($baladas, $shows);
        return $this->render('buscar', [
                    'eventos' => $eventos
        ]);
    }

    public function actionListar() {
        $baladas = EventBallad::find()->all();
        return $this->render('listar', [
                    'baladas' => $baladas
        ]);
    }
  public function actionShow() {
        $shows = Shows::find()->all();
        return $this->render('show', [
                    'shows' => $shows
        ]);
    }

}
