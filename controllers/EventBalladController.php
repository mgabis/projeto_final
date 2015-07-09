<?php

namespace app\controllers;

use Yii;
use app\models\EventBallad;
use app\models\EventBalladSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EventBalladController implements the CRUD actions for EventBallad model.
 */
class EventBalladController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all EventBallad models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new EventBalladSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionListar() {
        $baladas = EventBallad::find()->all();
        return $this->render('listar', [
                    'baladas' => $baladas
        ]);
    }

    /**
     * Displays a single EventBallad model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EventBallad model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new EventBallad();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            echo '<pre>';
var_dump($_FILES);
exit;
            $upload = new Upload($_FILES["image" . $i]);
            $path = Yii::app()->request->baseUrl . "/protected/images/";
            try {
                if ($upload->uploaded) {
                    $upload->process($path);
                } else {
                    echo(" file not uploaded ");
                }
                if ($upload->processed) {
                    $destName[$i] = $upload->file_dst_name;
                } else {
                    echo("upload not processed");
                    die;
                }
            } catch (Exception $excp) {
                echo($excp);
            }


            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EventBallad model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $upload = new Upload($_FILES["image" . $i]);
            $path = Yii::app()->request->baseUrl . "/protected/images/";
            try {
                if ($upload->uploaded) {
                    $upload->process($path);
                } else {
                    echo(" file not uploaded ");
                }
                if ($upload->processed) {
                    $destName[$i] = $upload->file_dst_name;
                } else {
                    echo("upload not processed");
                    die;
                }
            } catch (Exception $excp) {
                echo($excp);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EventBallad model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EventBallad model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return EventBallad the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = EventBallad::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
