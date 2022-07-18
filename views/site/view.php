<?php 
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'YII2 CRUD Application';
?>
<div class="site-index">
    <h1>VIEW POST</h1>


    <div class="body-content"> 
    <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $post ->title; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post ->desc; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post ->category; ?>
  </li>
</ul>

<div class="row">
    <div class = "col-lg-2">
        <div class="form-group"> <br>
            <a href=<?php echo yii::$app->homeUrl; ?> class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
</div>
</div>
