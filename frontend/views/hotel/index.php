<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Hoteles</h1>
<hr>

<?php foreach ($hotels as $hotel):?>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="https://cadencestorage.blob.core.windows.net/mondial/PartImages/SmallImages/No_Image.jpg" alt="...">
          <div class="caption">
            <h3><?= Html::encode("{$hotel->hotel_name}") ?></h3>
            <h3><?= Html::encode("{$hotel->stars}") ?></h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; ?>

