<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property string $id
 * @property string $g_model
 * @property string $serial
 * @property string $highlight_desc
 * @property integer $cate
 * @property string $img
 * @property integer $is_hero
 * @property integer $hero_href
 * @property string $install_img
 * @property string $param
 * @property string $notice
 * @property string $color
 * @property integer $create_date
 * @property integer $update_date
 * @property integer $status
 * @property string $buy
 * @property string $mobile_install_img
 * @property string $norder
 * @property string $goods_price
 * @property string $efotile_product_id
 * @property string $efotile_sku_id
 * @property string $page_title
 * @property string $keywords
 * @property string $description
 * @property string $views
 * @property integer $capacity
 * @property string $gongneng
 * @property integer $tank_location
 * @property integer $drying_way
 * @property integer $population
 * @property integer $process
 * @property integer $hangway
 * @property integer $shape
 * @property integer $hot
 * @property string $panel
 * @property string $power
 * @property integer $seriess
 * @property integer $material
 * @property integer $exhaust
 * @property integer $water
 * @property integer $gas
 * @property integer $heating
 * @property integer $control
 * @property integer $antifreeze
 * @property string $img_video
 * @property string $is_new
 * @property string $labels
 * @property string $goods_details
 * @property string $new_model
 * @property string $get_award
 * @property string $kitchen_scene
 * @property string $buy_line
 * @property string $goods_note
 * @property string $goods_activity
 * @property string $bottom_link
 * @property string $server
 * @property string $pc_activity_img
 * @property string $pc_activity_title
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_model', 'serial', 'highlight_desc', 'install_img', 'param', 'notice', 'create_date', 'update_date', 'buy', 'mobile_install_img', 'goods_price', 'efotile_product_id', 'is_new', 'labels', 'new_model', 'goods_activity', 'pc_activity_img'], 'required'],
            [['cate', 'img', 'is_hero', 'hero_href', 'install_img', 'create_date', 'update_date', 'status', 'mobile_install_img', 'norder', 'goods_price', 'efotile_product_id', 'views', 'capacity', 'tank_location', 'drying_way', 'population', 'process', 'hangway', 'shape', 'hot', 'seriess', 'material', 'exhaust', 'water', 'gas', 'heating', 'control', 'antifreeze', 'pc_activity_img'], 'integer'],
            [['param', 'img_video', 'goods_details', 'get_award', 'kitchen_scene', 'buy_line', 'goods_note', 'bottom_link'], 'string'],
            [['g_model', 'serial', 'highlight_desc', 'notice', 'page_title', 'keywords', 'description', 'labels', 'pc_activity_title'], 'string', 'max' => 255],
            [['color'], 'string', 'max' => 6],
            [['buy'], 'string', 'max' => 1024],
            [['efotile_sku_id', 'is_new', 'new_model'], 'string', 'max' => 50],
            [['gongneng', 'panel', 'power', 'server'], 'string', 'max' => 100],
            [['goods_activity'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'g_model' => 'G Model',
            'serial' => 'Serial',
            'highlight_desc' => 'Highlight Desc',
            'cate' => 'Cate',
            'img' => 'Img',
            'is_hero' => 'Is Hero',
            'hero_href' => 'Hero Href',
            'install_img' => 'Install Img',
            'param' => 'Param',
            'notice' => 'Notice',
            'color' => 'Color',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'status' => 'Status',
            'buy' => 'Buy',
            'mobile_install_img' => 'Mobile Install Img',
            'norder' => 'Norder',
            'goods_price' => 'Goods Price',
            'efotile_product_id' => 'Efotile Product ID',
            'efotile_sku_id' => 'Efotile Sku ID',
            'page_title' => 'Page Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'views' => 'Views',
            'capacity' => 'Capacity',
            'gongneng' => 'Gongneng',
            'tank_location' => 'Tank Location',
            'drying_way' => 'Drying Way',
            'population' => 'Population',
            'process' => 'Process',
            'hangway' => 'Hangway',
            'shape' => 'Shape',
            'hot' => 'Hot',
            'panel' => 'Panel',
            'power' => 'Power',
            'seriess' => 'Seriess',
            'material' => 'Material',
            'exhaust' => 'Exhaust',
            'water' => 'Water',
            'gas' => 'Gas',
            'heating' => 'Heating',
            'control' => 'Control',
            'antifreeze' => 'Antifreeze',
            'img_video' => 'Img Video',
            'is_new' => 'Is New',
            'labels' => 'Labels',
            'goods_details' => 'Goods Details',
            'new_model' => 'New Model',
            'get_award' => 'Get Award',
            'kitchen_scene' => 'Kitchen Scene',
            'buy_line' => 'Buy Line',
            'goods_note' => 'Goods Note',
            'goods_activity' => 'Goods Activity',
            'bottom_link' => 'Bottom Link',
            'server' => 'Server',
            'pc_activity_img' => 'Pc Activity Img',
            'pc_activity_title' => 'Pc Activity Title',
        ];
    }
}
