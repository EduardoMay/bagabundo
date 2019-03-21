<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Hoteles</h1>
<hr>

<?php

  $imgNoImage = Yii::getAlias('@img');

  $cont = 1;

  foreach($hotels as $hotel)
  {
    if ($cont == 1) {
      echo "<div class='row'>";
    }

    echo "
      <div class='col-sm-6 col-md-4'>
        <div class='thumbnail'>
          <img src='$imgNoImage/No_Image.jpg' alt='...'>
          <div class='caption'>
            <h3>$hotel->hotel_name</h3>
            <h3>$hotel->stars</h3>
            <p>...</p>
            <p>";

    // <a href='#' class='btn btn-primary' role='button'>Button</a> <a href='#' class='btn btn-default' role='button'>Button</a></p>
    echo Html::a(Yii::t('app', 'Detalles'), ['/hotel/view', 'id' => $hotel->id], ['class' => 'btn btn-primary']); 

    echo "</div>
        </div>
      </div>
    ";

    $cont++;

    if ($cont == 4) {
      echo "</div>";
      $cont = 1;
    }

  }

?>

<div class="row">
  <div class="col-md-12">
    <?= LinkPager::widget(['pagination' => $pagination,]); ?>
  </div>
</div>