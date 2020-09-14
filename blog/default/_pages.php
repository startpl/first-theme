<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="list-item">
    <div class="img">
        <img src="<?=$model->pageContent->image?>" alt="<?=$model->pageContent->name?>" />
    </div>
    <div class="article">
        <h3><?= Html::encode($model->pageContent->name) ?></h3>
          <div class="preview">
               <?=$model->pageContent->preview_text?>  
          </div>
    </div>
</div>