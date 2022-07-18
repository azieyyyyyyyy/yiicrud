<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;

/* @var yii\web\View $this */

$this->title = 'YII CRUD Application';
?>
<div class="site-index">


    <h1>UPDATE POST</h1>

    <div class="body-content">
        <?php 
        $form = ActiveForm::begin() ?>
        <div class="row">
            <div class="col-lg-6">
        <div class="form-group">
                <?= $form->field($post, 'title'); ?>
            </div>
        </div>
</div>

<div class="row">
<div class="col-lg-6">
    <div class="form-group">
        <?= $form->field($post, 'desc')->textarea(['rows' => '6']); ?>
            </div>
        </div>
</div>

<div class="row">
<div class="col-lg-6">
    <div class="form-group">
        <?php $items = ['e-commerce' => 'e-commerce', 'CMS' => 'CMS', 'MVC' => 'MVC']; ?>
                <?= $form->field($post, 'category')->dropDownList($items, ['prompt' => 'Select']); ?>
            </div>
        </div>
</div>

<div class="row">
<div class="col-lg-2">
    <div class="form-group">
            <?= Html::submitButton('Update Post', ['class'=>'btn btn-primary']);?>
        </div>
</div>
        <div class = "col-lg-2">
            <div class="form-group">
            <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>
            </div>
        </div>
            </div>
</div>

        <?php ActiveForm::end() ?>
    </div>
</div>
