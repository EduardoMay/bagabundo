<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  <h1><?= Html::encode($this->title) ?></h1>
    
  <h1>Bagabundo!</h1>

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">   </h5>
          <p class="card-text">El objetivo principal de este proyecto es crear una página web para dar 
          a conocer a los clientes/usuarios una gran variedad de viajes a los lugares más visitados del mundo.</p>  
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">  </h5>
            <p class="card-text">Se desea brindarle a la gente una página de búsqueda de servicios de hospitalidad y 
            viajes con el fin de que las personas encuentren un servicio a su gusto y economía de la gente.</p> 
          </div>
        </div>
      </div>   
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">  </h5>
          <p class="card-text"><p class="card-text">Las personas pueden encontrar sus servicios en las siguientes categorías:</p>
           <p class="card-text">-Hoteles </p>
           <p class="card-text">-Vuelos </p>
           <p class="card-text">-Renta de autos o transportación </p>
           <p class="card-text">-Tours </p>
          <a href="/bagabundo" class="btn btn-primary">Inicio</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">  </h5>
          <p class="card-text">Bagabundo ofrece una aplicación gratuita para su producto de Búsqueda de hoteles,
            se basa en un sistema en que el cliente hace la reserva del alojamiento u hotel y paga por tarjeta de crédito.  </p>
          <p class="card-text"> Por lo tanto funciona como un portal web de viajes que genera una conexión inmediata de los consumidores con los sitios de viajes. 
            Es un conjunto de redes que permite a distintos hoteles y alojamientos ofrecer su oferta en tiempo real en internet </p>
        </div>
      </div>
    </div>
  </div>
</div>