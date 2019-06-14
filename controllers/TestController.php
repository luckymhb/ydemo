<?php

namespace app\controllers;

use yii;
use app\models\Login;
use app\models\Goods;
use yii\web\Response;
use yii\helpers\Html;
use yii\data\Pagination;    //分页类
use yii\filters\AccessControl; //过滤器类
use yii\imagine\Image;
class TestController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    //禁用布局
    //引用其他布局文件
    public $layout = 'wx';
    //访问路径
    //http://www.ydemo.com/web/index.php?r=test/login

    //引用http缓存
//    public function behaviors()
//    {
//        return [
//            [
//                'class' => 'yii\filters\HttpCache',
//                'only' => ['index', 'view','login'],
//                'lastModified' => function ($action, $params) {
//                    $q = new \yii\db\Query();
////                    return $q->from('yii_login')->max('create_time');
//                    return \Yii::$app->params['lastModified'];
//                },
//            ],
//        ];
//    }
    //AccessControl
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['index'],
//                'rules' => [
//                    // 允许认证用户
//                    [
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                    // 默认禁止其他用户
//                ],
//            ],
//        ];
//    }

    public function actionIndex()
    {
        $session = Yii::$app->session;
        $uname = $session->get('uname');
        if(!$uname)
            $this->redirect('?r=test/login');
        // $test='hello';
        // $db=Login::findBySql('SELECT lname,id FROM yii_login')->all();
        // echo Login::find()->all();
        return $this->render('index');
    }
    public function actionCheck()
    {
        $admin=Login::model()->findAll();
        return $this->render('check');
    }
    public function actionWelcome(){
      return $this->render('welcome');
    }
    public function actionLogin(){
        $session = Yii::$app->session;
        if($_POST){
//            print_r(yii::$app->request->post());die;
            // yii::$app->request->post() 接收post传输的数据
            $uname = Login::findOne(['lname' => $_POST['username'], 'lpass' => $_POST['password']]);
            if($uname){
                $data['status'] = 1;
                $data['info'] = '登录成功';
                $session->set('uname', $uname['lname']);
            }else{
                $data['status'] = 2;
                $data['info'] = '用户名或密码错误';
            }
            //直接ajax返回，前端不需要解析
            //        $response = Yii::$app->response;
            //        $response->format = \yii\web\Response::FORMAT_JSON;
            //        $response->data = $data;
            //        $response->send();
            return json_encode($data);
        }else{
            return $this->render('login', [
                'title' => Html::encode('管理员登录'),
            ]);
        }
    }
    public function actionDetail(){
        //为图片创建一个缩略图
//        Image::thumbnail('@webroot/test/images/phone.png', 120, 120)
//            ->save(Yii::getAlias('@runtime/thumb-test-image.jpg'), ['quality' => 50]);
        $gid = 374;
        $goods = Goods::find()->where(['id' => $gid])->one();
        //新模板Banner
        $goods['img_video']      = json_decode($goods['img_video'], TRUE);
        $goods['get_award']      = json_decode($goods['get_award'], TRUE);
        $goods['kitchen_scene']  = json_decode($goods['kitchen_scene'], TRUE);
        $goods['buy_line']       = json_decode($goods['buy_line'], TRUE);//mobile购买链接
        $goods['buy']            = json_decode($goods['buy'], TRUE);     //PC购买链接
        //新模板标签
        $goods['labels']         = explode(",", $goods['labels']);
        //新模板活动
        $goods['goods_activity'] = json_decode($goods['goods_activity'], TRUE);
        //新模板详情
        $goods['goods_details']  = json_decode($goods['goods_details'], TRUE);
//        $goods['goods_num']      = count($goods['goods_details']);
        //新模板备注
        $goods['goods_note']     = json_decode($goods['goods_note'], TRUE);
        //底部推广链接
        $goods['bottom_link']    = json_decode($goods['bottom_link'], TRUE);
        return $this->render('detail',['goods'=>$goods]);
    }
    public function actionGoods(){
        $query = Goods::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
    public function actionTest(){
        $model = new Login();
        return $this->render('test',['model'=>$model]);
    }

}
