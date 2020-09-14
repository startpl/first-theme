<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="list-item">
    <div class="img">
        <img src="<?=$model->categoryContent->image?>" alt="<?=$model->categoryContent->name?>" />
    </div>
    <div class="article">
        <h3><?= Html::encode($model->categoryContent->name) ?></h3>
          <div class="preview">
               <?=$model->categoryContent->preview_text?>  
          </div>
    </div>
</div>