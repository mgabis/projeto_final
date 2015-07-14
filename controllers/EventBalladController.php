<?php

namespace app\controllers;

use Yii;
use app\models\EventBallad;
use app\models\EventBalladSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

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

        if (!empty(Yii::$app->request->post())) {
            $postModel = Yii::$app->request->post();
            if (!empty($_FILES['EventBallad']['name']['avatar'])) {
                $file_extension = explode('.', $_FILES['EventBallad']['name']['avatar']);
                $file_extension = array_pop($file_extension);
                $new_filename = md5(time()) . '.' . $file_extension;
                move_uploaded_file($_FILES['EventBallad']['tmp_name']['avatar'], Yii::$app->basePath . "/web/uploads/images/" . $new_filename);
                $postModel['EventBallad']['avatar'] = $new_filename;
            }

            $model->load($postModel);
            $model->save();
            
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
