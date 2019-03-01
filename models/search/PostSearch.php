<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

/**
 * PostSearch represents the model behind the search form about `app\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author_id', 'tags', 'status'], 'integer'],
            [['title', 'content', 'create_time', 'update_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)         //查询方法
    {
        $query = Post::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,                      //查询
            'pagination' => ['pageSize'=>3],        //分页
            'sort' =>[                              //排序
                    'defaultOrder' =>[
                        'id' =>SORT_DESC,
                    ],
                    //'attributes' =>['id','title'],  //指定哪些字段排序
            ],
        ]);
//         echo '<pre>';
//         print_r($dataProvider->getPagination());
//         print_r($dataProvider->getCount());         //当前页的总条数
//         print_r($dataProvider->getTotalCount());    //所有记录条数
//         print_r($dataProvider->getModels());        //取得dataProvider中的数据,可能是对象数组,普通数组
//         echo '<pre>';

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'author_id' => $this->author_id,
            'tags' => $this->tags,
            'status' => $this->status,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
