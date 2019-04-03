<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Atracciones</h1>
<hr>

<?php

  $imgNoImage = Yii::getAlias('@img');

  $cont = 1;

  foreach($attractions as $attractions)
  {
    if ($cont == 1) {
      echo "<div class='row'>";
    }

    echo "
      <div class='col-sm-6 col-md-4'>
        <div class='thumbnail'>
          <img src='$imgNoImage/No_Image.jpg' alt='...'>
          <div class='caption'>
            <h3>$attractions->type_attraction</h3>
            <h3>$attractions->num_people</h3>
            <h3>$ $attractions->price</h3>
            <p>...</p>
            <p>";

    // <a href='#' class='btn btn-primary' role='button'>Button</a> <a href='#' class='btn btn-default' role='button'>Button</a></p>
    echo Html::a('Detalles', ['/attractions/view', 'id' => $attractions->id], ['class' => 'btn btn-primary']); 

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