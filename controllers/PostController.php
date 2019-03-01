<?php

namespace app\controllers;

use Yii;
use app\models\Post;
use app\models\search\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        //echo $models->status0->name;
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
//         $models=Post::find()->where(['id'=>1])->one();      //AR查询POST表中ID为1的数据==$models=Post::findOne(1); 
//         echo $models->id;            //输出获取的ID
//         foreach($models as $item){   //输出数组数据
//            echo $models->id;         //输出获取的ID
//            echo $models->title;      //输出获取的标题
//         }
//           $models=Post::findOne(1);
//          echo $models->status0->name;
//         $customer=new customer();            //customer可能是表 ,创建一条记录
//         $customer->name = 'james';
//         $customer->email = 'james@example.com';
//         $customer->save();

        
//         $customer=customer::findone($id);   //customer可能是表 ,更新一条记录
//         $customer->email = 'james@example.com';
//         $customer->save();

//         $customer=customer::findone($id);   //customer可能是表 ,查找一条记录

        
//         $customer=customer::findone($id);   //customer可能是表 ,删除一条记录
//         $customer->delete();

//         $models=Post::find()->where(['status'=>1])->all();  //AR查询POST表中status为1的所有数据==$models=Post::findAll(['stats'=>1]);
//         $models=Post::find()->where('AND',['status'=>1],['author_id'=>1],['like','title','yii'])->all();
           $sql="select * from yii_post";
//         $models=Post::findBySql($sql)->all();
//         var_dump($models);
//         exit();
//         $posts=yii::$app->db->createCommand('select * from yii_post
//             where id=:id and status=:status')
//         ->bindValue(':id', $_GET['id'])
//         ->bindValue(':status',2)
//         ->queryAll();  //Command查询
//         var_dump($posts);
//         exit();
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        //$model->update_time= date('y-m-d H:i:s',time());
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
