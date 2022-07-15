<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;

/* @var yii\web\View $this */

$this->title = 'YII CRUD Application';
?>
<div class="site-index">


    <h1>CREATE POST</h1>

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
                <?= $form->field($post, 'category')->dropDownList($items, ['promt' => 'Select']); ?>
            </div>
        </div>
</div>

        <?php ActiveForm::end() ?>
    </div>
</div>
