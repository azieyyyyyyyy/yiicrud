<?php
    namespace app\models;

    use yii\db\ActiveRecord;

    class Posts extends ActiveRecord
    {
        private $title;
        private $desc;
        private $category;

        public function rules(){
            return[
                [['title', 'desc', 'category'], 'required']

            ];
        }
    }
?>