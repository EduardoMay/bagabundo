<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Bagabundo!</h1>

        <!-- <p class="lead">You have successfully created your Yii-powered application.</p> -->

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">

        <!-- <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div> -->

        <!-- Vista de todos los automoviles -->
        <h1>Automoviles</h1>

        <div class="card" style="width: 18rem;">
            <?php foreach ($cars as $car): ?>
                  <img src="https://cadencestorage.blob.core.windows.net/mondial/PartImages/SmallImages/No_Image.jpg" class="card-img-top" alt="<?= Html::encode("{$car->model}") ?>">
                  <div class="card-body">
                    <h5 class="card-title">
                        <?= Html::encode("{$car->model}") ?>
                    </h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tipo de auto: <?= Html::encode("{$car->type_car}") ?></li>
                    <li class="list-group-item">Color: <?= Html::encode("{$car->color}") ?></li>
                    <li class="list-group-item">Estado: <?= Html::encode("{$car->state}") ?></li>
                    <li class="list-group-item">Precio: $<?= Html::encode("{$car->price}") ?></li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
            <?php endforeach; ?>
        </div>

        <hr>

        <!-- Vista de todos los hoteles -->
        <h1>Hoteles</h1>

       
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
    echo Html::a('Detalles', ['/hotel/view', 'id' => $hotel->id], ['class' => 'btn btn-primary']); 

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
       
        
        <?= LinkPager::widget(['pagination' => $pagination,]); ?>
    </div>
</div>