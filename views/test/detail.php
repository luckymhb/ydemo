<?php
use yii\helpers\Html;
use app\assets\TestAsset;
use yii\widgets\Alert;
use yii\widgets\Breadcrumbs;
TestAsset::register($this);  // $this 代表视图对象
$this->context->layout = false;

$this->title = '页面详情';
?>
<?php $this->beginPage() ?>
<!doctype>
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>">          <!-- Yii::$app->charset  设置页面编码  -->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>                              <!-- 此处引用TestAsset的资源文件 -->
</head>
<body>
<?php $this->beginBody() ?>
<div class="main">
    <div class="box1" id="top">
        <div class="purchase2">
            <div class="navs_left"><a href="javascript:history.back(-1)"><span><img src="<?= __IMG__ ?>/back.png"></span></a><img src="images/head_products.png"><a href="#">吸油烟机</a></div>
            <div class="navs_right">
                <div class="navs_button">
                    <div class="text"><a href="#">换台烟机，解决厨房难题*</a> </div>
                    <div class="subti"><a href="#" id="hide">咨询</a><span><a href="#" id="hide2">购买
                            <div class="purchase3">
                                <div class="purchase_jiao"><img src="images/san.png"></div>
                                <div class="purchase">
                                    <ul>
                                        <li>查看附近专卖店</li>
                                        <li>去方太商城购买</li>
                                        <li>去京东商城购买</li>
                                        <li>去天猫商城购买</li>
                                    </ul>
                                </div>
                            </div>
                        </a></span></div>
                </div>
            </div>
            <div class="navs_nav">
                <ul>
                    <li><a href="#product">产品详情</a> </li>
                    <li><a href="#parameter">技术参数</a></li>
                    <li><a href="#install">安装示意</a></li>
                </ul>
            </div>
        </div>
        <div class="purchase2" id="yin2">
            <!--<div class="purchase_jiao"><img src="images/san.png"></div>
            <div class="purchase">
                <ul>
                    <li><a href="#">查看附近专卖店</a> </li>
                    <li><a href="#">去方太商城购买</a></li>
                    <li><a href="#">去京东商城购买</a></li>
                    <li><a href="#">去天猫商城购买</a></li>
                </ul>
            </div>-->
        </div>
        <div class="consultation" id="yin">
            <div class="bottoms"></div>
            <div class="tops"><img src="images/zxwindow.png">
                <a href="#" id="show" style="display: block; z-index: 10; position: absolute; right: 0px; top: 0px; width: 40px; height: 40px"></a>
                <a href="#" style="display:block; position: absolute; width: 186px; height: 146px; top: 126px; left: 34px;"></a>
                <a href="#" style="display: block; position: absolute; width: 186px; height: 146px; top: 126px; left: 258px;"></a>
            </div>
        </div>
    </div>
    <div class="box2" id="box2">
        <div class="product_left">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide product_left2" id="demos1">
                        <img class="demo1" src="images/product3.png">
                    </div>
                    <div class="swiper-slide product_left2"><video autoplay loop muted src="video/video2.mp4"><div class="video">您的浏览器不支持视频播放</div></video></div>
                    <div class="swiper-slide product_left2"  id="enla3" style="background-image: url(images/product.png);
                        filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product.png',sizingMethod='scale');
                        -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product.png',sizingMethod='scale');">
                    </div>
                </div>
            </div>
            <div class="pagination" style="z-index: 10;"></div>
            <div class="product_left3" id="hides3"><img src="images/prize1.png" id="imgss2"></div>
        </div>
        <div class="product_right">
            <div class="list">
                <ul>
                    <li>新品</li>
                    <li>侧吸式</li>
                    <li>手感智控</li>
                    <li>近吸直排</li>
                </ul>
            </div>
            <div class="title">CXW-258-JQ01TB<span><img src="images/path.png">385</span></div>
            <div class="text">方太智能风魔方 近吸直排不跑烟* 放心敞开厨房放心敞开厨房</div>
            <div class="prize">
                <span>获得奖项</span>
                <img src="images/product.png" id="imgs1" onclick="afters(1)"><img src="images/prize2.png" id="imgs2" onclick="afters(2)"><img src="images/prize3.png"  id="imgs3" onclick="afters(3)">
                <div class="prize_ding2" id="hides">
                    <div class="zhe"></div>
                    <div class="prize_ding">
                        <img src="images/prize1.png" id="imgss">
                        <div class="close"><img src="images/close.png"></div>
                    </div>
                </div>
            </div>
            <div class="prize_list">
                <div class="texts">免费上门设计，3小时为您换新</div>
                <div class="texts_right"><a href="#">立即参与<img src="images/right.png"></a></div>
            </div>
        </div>
    </div>
    <div class="box3 w980" id="product">
        <div class="titles">产品详情</div>
        <div class="product-details2">
            <div class="product-details">
                <div class="product-details-left">
                    <div class="swiper-container4">
                        <div class="swiper-wrapper" id="aaa">
                            <div class="swiper-slide product-details-left2" style="background-image: url(images/product2.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product2.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product2.png',sizingMethod='scale');"></div>
                        </div>
                        <div class="pagination4" id="aaa2"></div>
                    </div>
                </div>
                <div class="product-details-right">
                    <div class="text">
                        <span>烟灶联动* 智能排烟好轻松 </span>首次采用直流变频电机，带来强劲动力，最大静压可达720Pa，相当于3秒跑完百米，动力更强劲，比上代420Pa提升71%。3秒跑完百米的风速，轻松应对排烟阻力；有效排量跃升40% ,吸烟更劲更充分，即使排烟高峰期也能畅通无阻。
                    </div>
                </div>
            </div>
            <div class="product-details">
                <div class="product-details-right">
                    <div class="text">
                        <span>全自动隔离屏，给油烟设定“禁飞区” </span>隔烟屏闭合 减少油烟倒灌，全自动钝角开合，隔离油烟。160mm宽的隔烟屏，为用户设立油烟“硬隔断”，有效减少油烟“微扩散”，降低油烟对皮肤的伤害。
                    </div>
                </div>
                <div class="product-details-left">
                    <div class="swiper-container5">
                        <div class="swiper-wrapper" id="bbb">
                            <div class="swiper-slide product-details-left2" style="background-image: url(images/product3.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product3.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product3.png',sizingMethod='scale');"></div>
                            <div class="swiper-slide product-details-left2"><video autoplay loop muted src="video/video2.mp4"><div class="video2">您的浏览器不支持视频播放</div></video></div>
                            <div class="swiper-slide product-details-left2" style="background-image: url(images/product.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product.png',sizingMethod='scale');"></div>
                        </div>
                        <div class="pagination5" id="bbb2"></div>
                    </div>
                </div>
            </div>
            <div class="product-details">
                <div class="product-details-left">
                    <div class="swiper-container6">
                        <div class="swiper-wrapper" id="ccc">
                            <div class="swiper-slide product-details-left2" style="background-image: url(images/product4.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product4.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product4.png',sizingMethod='scale');"></div>
                            <div class="swiper-slide product-details-left2"><video autoplay loop muted src="video/video2.mp4"><div class="video2">您的浏览器不支持视频播放</div></video></div>
                            <div class="swiper-slide product-details-left2" style="background-image: url(images/product.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product.png',sizingMethod='scale');"></div>
                        </div>
                        <div class="pagination6" id="ccc2"></div>
                    </div>
                </div>
                <div class="product-details-right">
                    <div class="text">
                        <span>强大机芯动力，创造动与静的相容默契 </span>直流变频电机，强劲吸排的强力保障，全新配备直流变频电机系统，最大静压可达820Pa，动力强劲，较少油烟倒灌，排烟快。采用蜂窝网及微孔消声科技，降噪表现上佳，让烹饪环境更舒适。
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box4 w980" id="parameter">
        <div class="titles">技术参数</div>
        <div class="technical">
            <ul>
                <li>外形尺寸 (mm): 长900×宽515×高645</li>
                <li>风量 (m³/min): 15</li>
                <li>额定功率 (W): 258</li>
                <li>噪声(dB): ≤48</li>
                <li>最大风压值 (Pa): 720</li>
                <li>开关/按键: 4.3英寸液晶触控屏</li>
            </ul>
        </div>
    </div>
    <div class="box5 w980" id="install">
        <div class="titles">安装示意图</div>
        <div class="install">
            <div class="install_img" style="background-image: url(images/install.png);
                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/install.png',sizingMethod='scale');
                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/install.png',sizingMethod='scale');"></div>
            <div class="install_text"><span>出风管走吊顶安装示意图（单位：mm）</span><a href="#">我家能安装吗？</a></div>
        </div>
        <div class="remarks">
            <div>备注:</div>
            <div class="text"><i>1.</i><span>橱柜两侧与整机两侧间隙建议预留尺寸≥5（见图示）； </span></div>
            <div class="text"><i>2.</i><span> 橱柜搭配示意图中★460-840为含装饰罩高度尺寸范围，装饰罩组件为选购件; </span></div>
            <div class="text"><i>3.</i><span>此安装高度只适用于电灶，如果安装在燃气炉灶上方，炉灶上烹调器具的支承面与吸油烟机最低部位的最小距离 应至少为650，如燃气炉灶安装说明规定了较大的安装距离，则对此应予考虑。 </span></div>
            <div class="text"><i>4.</i><span>吸油烟机的安装高度为推荐值，图示橱柜与油烟机的搭配示意仅供参考； </span></div>
            <div class="text"><i>5.</i><span>吸油烟机上部与橱柜底部可能需要预留间隙才能安装<br>或拆卸，请予以注意。</span></div>
        </div>
        <div class="titles">厨房场景</div>
        <div class="scene">
            <div class="swiper-container7">
                <div class="swiper-wrapper" id="ddd">
                    <div class="swiper-slide scene2" style="background-image: url(images/product3.png);
                        filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product3.png',sizingMethod='scale');
                        -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product3.png',sizingMethod='scale');"></div>
                    <div class="swiper-slide scene2"><video autoplay loop muted src="video/video2.mp4"><div class="video2">您的浏览器不支持视频播放</div></video></div>
                    <div class="swiper-slide scene2" style="background-image: url(images/product.png);
                        filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product.png',sizingMethod='scale');
                        -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/product.png',sizingMethod='scale');"></div>
                </div>
                <div class="pagination7" id="ddd2"></div>
            </div>
        </div>
        <div class="titles">最新活动</div>
        <div class="newest"><img src="images/newest.png"></div>
    </div>
    <div class="box6">
        <div class="titles w980">为你推荐</div>
        <div class="recommend">
            <div class="swiper-container2">
                <div class="swiper-wrapper" id="recomm">
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack">
                            <div class="pack_img" style="background-image: url(images/recommend.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');"></div>
                            <div class="pack_title">CXW-228-JQ15T</div>
                            <div class="list"><span>侧吸式</span><span>手感智控</span><span>近吸直排</span></div>
                            <div class="text"><a href="#"> 进一步了解</a></div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack">
                            <div class="pack_img" style="background-image: url(images/recommend.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');"></div>
                            <div class="pack_title">CXW-228-JQ15T</div>
                            <div class="list"><span>侧吸式</span><span>手感智控</span><span>近吸直排</span></div>
                            <div class="text"><a href="#"> 进一步了解</a></div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack">
                            <div class="pack_img" style="background-image: url(images/recommend.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');"></div>
                            <div class="pack_title">CXW-228-JQ15T</div>
                            <div class="list"><span>侧吸式</span><span>手感智控</span><span>近吸直排</span></div>
                            <div class="text"><a href="#"> 进一步了解</a></div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack">
                            <div class="pack_img" style="background-image: url(images/recommend.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');"></div>
                            <div class="pack_title">CXW-228-JQ15T</div>
                            <div class="list"><span>侧吸式</span><span>手感智控</span><span>近吸直排</span></div>
                            <div class="text"><a href="#"> 进一步了解</a></div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack">
                            <div class="pack_img" style="background-image: url(images/recommend.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');"></div>
                            <div class="pack_title">CXW-228-JQ15T</div>
                            <div class="list"><span>侧吸式</span><span>手感智控</span><span>近吸直排</span></div>
                            <div class="text"><a href="#"> 进一步了解</a></div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack">
                            <div class="pack_img" style="background-image: url(images/recommend.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');"></div>
                            <div class="pack_title">CXW-228-JQ15T</div>
                            <div class="list"><span>侧吸式</span><span>手感智控</span><span>近吸直排</span></div>
                            <div class="text"><a href="#"> 进一步了解</a></div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack">
                            <div class="pack_img" style="background-image: url(images/recommend.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/recommend.png',sizingMethod='scale');"></div>
                            <div class="pack_title">CXW-228-JQ15T</div>
                            <div class="list"><span>侧吸式</span><span>手感智控</span><span>近吸直排</span></div>
                            <div class="text"><a href="#"> 进一步了解</a></div>
                        </div>
                    </div>
                </div>
                <!--<div class="pagination2" id="recomms"></div>-->
                <div class="swiper-scrollbar2"></div>
            </div>
            <!--<div class="xian"><span></span></div>-->
        </div>
    </div>
    <div class="box7">
        <div class="titles w980">服务政策</div>
        <div class="w980 list">
            <ul>
                <a href="#"><li><p><img src="images/icon1.png"></p>厨电产品五年包修</li></a>
                <a href="#"><li><p><img src="images/icon2.png"></p>新购产品免费上门<br>安装调试</li></a>
                <a href="#"><li><p><img src="images/icon3.png"></p><span>7*24小时</span>人工客服在线</li></a>
                <a href="#"><li><p><img src="images/icon4.png"></p>七天无忧退货</li></a>
                <a href="#"><li><p><img src="images/icon5.png"></p>十五天无忧换货</li></a>
            </ul>
            <div class="foot"><a href="#">了解更多服务详情</a> </div>
        </div>
    </div>
    <div class="box8">
        <div class="w980">
            <div class="titles" style="float: left">幸福的智慧</div>
            <div class="titles_right"><a href="#"> 查看更多</a></div>
        </div>
        <div class="happiness">
            <div class="swiper-container3">
                <div class="swiper-wrapper" id="happin">
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack" onclick="window.location.href='http://www.fotile.com/xingfu/Index/index.html'">
                            <div class="pack_img" style="background-image: url(images/happiness.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');"></div>
                            <div class="pack_title">如何装出家居杂志一样的厨房？从厨房布局设计四大原则开始</div>
                            <div class="pack_text">对于没装修过厨房的人来说，这是询问的每一个环节都觉得新奇，看厨房样…</div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack" onclick="window.location.href='http://www.fotile.com/xingfu/Index/index.html'">
                            <div class="pack_img" style="background-image: url(images/happiness.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');"></div>
                            <div class="pack_title">如何装出家居杂志一样的厨房？从厨房布局设计四大原则开始</div>
                            <div class="pack_text">对于没装修过厨房的人来说，这是询问的每一个环节都觉得新奇，看厨房样…</div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack" onclick="window.location.href='http://www.fotile.com/xingfu/Index/index.html'">
                            <div class="pack_img" style="background-image: url(images/happiness.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');"></div>
                            <div class="pack_title">如何装出家居杂志一样的厨房？从厨房布局设计四大原则开始</div>
                            <div class="pack_text">对于没装修过厨房的人来说，这是询问的每一个环节都觉得新奇，看厨房样…</div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack" onclick="window.location.href='http://www.fotile.com/xingfu/Index/index.html'">
                            <div class="pack_img" style="background-image: url(images/happiness.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');"></div>
                            <div class="pack_title">如何装出家居杂志一样的厨房？从厨房布局设计四大原则开始</div>
                            <div class="pack_text">对于没装修过厨房的人来说，这是询问的每一个环节都觉得新奇，看厨房样…</div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack" onclick="window.location.href='http://www.fotile.com/xingfu/Index/index.html'">
                            <div class="pack_img" style="background-image: url(images/happiness.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');"></div>
                            <div class="pack_title">如何装出家居杂志一样的厨房？从厨房布局设计四大原则开始</div>
                            <div class="pack_text">对于没装修过厨房的人来说，这是询问的每一个环节都觉得新奇，看厨房样…</div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack" onclick="window.location.href='http://www.fotile.com/xingfu/Index/index.html'">
                            <div class="pack_img" style="background-image: url(images/happiness.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');"></div>
                            <div class="pack_title">如何装出家居杂志一样的厨房？从厨房布局设计四大原则开始</div>
                            <div class="pack_text">对于没装修过厨房的人来说，这是询问的每一个环节都觉得新奇，看厨房样…</div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="pack" onclick="window.location.href='http://www.fotile.com/xingfu/Index/index.html'">
                            <div class="pack_img" style="background-image: url(images/happiness.png);
                                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');
                                -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/happiness.png',sizingMethod='scale');"></div>
                            <div class="pack_title">如何装出家居杂志一样的厨房？从厨房布局设计四大原则开始</div>
                            <div class="pack_text">对于没装修过厨房的人来说，这是询问的每一个环节都觉得新奇，看厨房样…</div>
                        </div>
                    </div>
                </div>
                <!--<div class="pagination3" id="happins"></div>-->
                <div class="swiper-scrollbar"></div>
            </div>
            <!--<div class="xian"><span></span></div>-->
        </div>
    </div>
    <div class="box9">
        <div class="text">掌心里的烹饪助手，<br>今天开始健康下厨。<a href="#">下载方太生活家APP</a><div class="text_ding"><img src="images/phone.png"></div></div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

