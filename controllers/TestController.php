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
use yii\db\Query;
use yii\web\UploadedFile;
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

        echo Yii::$app->request->url;
        echo $userIP = Yii::$app->request->userIP;
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
        //发送文件，浏览器下载图片
//        return \Yii::$app->response->sendFile('D:\phpStudy\PHPTutorial\WWW\ydemo/web/test/images/phone.png');
        //抛出错误
//        throw new \yii\web\BadRequestHttpException;
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
        //设置session_flash
        $session = yii::$app->session;
//        // 在名称为"alerts"的session_flash信息增加数据
//        $session->setFlash('alerts','first');
//        $session->addFlash('alerts', 'You have successfully deleted your post.');
//        $session->addFlash('alerts', 'You have successfully added a new friend.');
//        $session->addFlash('alerts', 'You are promoted.');
//        $alerts = $session->getFlash('alerts');
//        print_r($alerts);
        if($session->hasFlash('postDeleted')){
            $session->setFlash('postDeleted', 'You have successfully deleted your post.');
        }

        $cookies = Yii::$app->response->cookies;
        // 在要发送的响应中添加一个新的 cookie
        $cookies->add(new \yii\web\Cookie([
            'name' => 'language',
            'value' => 'zh-CN',
        ]));
        //获取cookie
        echo $cookies->getValue('language');

        //查询构建器
        $query = (new Query())->from('yii_login');
//        $a = $query->select(['*'])->all();
//        $command = $query->select(['*'])->where(['like', 'lname', ['23', '45']])->all(); //查询语句，数组方式
          $command = $query->select(['*'])->where(['like', 'lname', ['23', '45']])->indexBy(function ($row) {
              return $row['id'];//代表使用id，作为数组的下标(key)
          })->all(); //查询语句，索引方式
//        $command = $query->select(['*'])->where(['like', 'lname', ['23', '45']] )->createCommand(); //用于打印sql
//        // 打印 SQL 语句
//        echo $command->sql;
//        // 打印被绑定的参数
//        print_r($command->params);
//        // 返回查询结果的所有行
//        $rows = $command->queryAll();
//        $goods = Goods::findOne(374);
        // 每次获取 10 条产品数据
//        foreach (Goods::find()->batch(10) as $customers) {
//
//            // $customers 是个最多拥有 10 条数据的数组
//        }
        // 每次获取 10 条客户数据，然后一条一条迭代它们
//        foreach (Goods::find()->each(10) as $customer) {
//            print_r($customer);
//            // $customer 是个 `Customer` 对象
//        }
//        $login = Login::findOne(4);
//        echo $login->getCreateTimeText();
//        $login->setCreateTimeText('2019-06-18 14:26:34');
//        $login->getOldAttributes();//获取查询到的数据
//        $login->loadDefaultValues();//
//        $login->save();
//        $redis = Yii::$app->redis;
//        // 判断 key 为 username 的是否有值，有则打印，没有则赋值
//        $key = 'username';
//        if ($val = $redis->get($key)) {
//            var_dump($val);
//        } else {
//            $redis->set($key, 'marko');
//            $redis->expire($key, 5);
//        }
        //处理上传文件
        $model = new Login();
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
//            print_r($post);die;
            //单图上传
//            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            //多图上传
            $model->imageFile = UploadedFile::getInstances($model, 'imageFile');
            if ($imgUrl = $model->upload()) {
                // 文件上传成功
//                echo '上传成功';
            }
            // INSERT (table name, column values)
            Yii::$app->db->createCommand()->insert('yii_login', [
                'lname' => $post['Login']['lname'],
                'lpass' => $post['Login']['lpass'],
                'create_time' => time(),
                'imageFile' => $imgUrl
            ])->execute();
            $this->redirect('test');
        }else{
            //数据格式器
            $formatter = \Yii::$app->formatter;
            echo Yii::$app->formatter->format('2019-06-25', 'relativeTime');
            echo Yii::$app->formatter->format('2542.123', 'integer');
            echo Yii::$app->formatter->format('https://www.baidu.com', 'url');
            echo Yii::$app->formatter->format('http://thirdwx.qlogo.cn/mmopen/vi_32/813lMMqJxibZ0kmwkIDQHPgiaTxovfswMSAbibRJXelRvIEq4fzooeBhQX8VWBuWaljQMtNIZl3ufhI3xEC9vGbOw/132', 'image');
            //使用分页
            $query = Login::find();
            // 得到文章的总数（但是还没有从数据库取数据）
            $count = $query->count();
            // 使用总数来创建一个分页对象
            $pagination = new Pagination(['totalCount' => $count,'defaultPageSize' => 2]);
            // 使用分页对象来填充 limit 子句并取得文章数据
            $articles = $query->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
            $item = [1=>'php',2=>'java',3=>'C++'];
            return $this->render('test',['model'=>$model,'item'=>$item,'pagination' => $pagination]);
        }
    }
    //上传文件
    public function actionUpload()
    {


        return $this->render('upload', ['model' => $model]);
    }

}
