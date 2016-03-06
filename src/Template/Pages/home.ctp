<style>
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-bottom: 40px;
  color: #5a5a5a;
}


/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 20;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper > .container {
  padding-right: 0;
  padding-left: 0;
}
.navbar-wrapper .navbar {
  padding-right: 15px;
  padding-left: 15px;
}
.navbar-wrapper .navbar .container {
  width: auto;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 20px;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {
  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
  }
  .navbar-wrapper .container {
    padding-right: 15px;
    padding-left: 15px;
  }
  .navbar-wrapper .navbar {
    padding-right: 0;
    padding-left: 0;
  }

  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 992px) {
  .featurette-heading {
    margin-top: 120px;
  }
 }

 h1{
   color: #fff;
 }
 
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item">
	<?= $this->Html->image('banner.png', [
	      'alt' => 'Controla-banner',
	      'class' => 'img-responsive'
	    ]); ?>
      <div class="container">
        <div class="carousel-caption">
	  <div class="row">
	    <div class="col-lg-6">
	      <h1 style="text-transform: uppercase"><?=__('Software de gestión de almacén ¡Gratis!'); ?></h1><hr>
              <p><?=__('No es necesario pagar más de $1000,00 USD por un software que lo ayude en la gestión de las entradas y salidas de su almacén.'); ?></p>
              <p><a class="btn btn-lg btn-success" href="/begin" role="button">Comenzar ahora</a></p>
	    </div>
	    <div class="col-lg-6">
	    </div>
	  </div>
        </div>
      </div>
    </div>
    <div class="item">
      <?= $this->Html->image('banner.png', [
	      'alt' => 'Controla-banner',
	      'class' => 'img-responsive'
	    ]); ?>
      <div class="container">
        <div class="carousel-caption">
	  <div class="row">
	    <div class="col-lg-6">
	      <h1 style="text-transform: uppercase"><?=__('Acceda a su almacen desde cualquier lugar y a cualquier hora'); ?></h1><hr>
              <p><?=__('Para la dirección eficiente de un almacén complejo se tienen que hacer en tiempo real.'); ?></p>
              <p><a class="btn btn-lg btn-success" href="/begin" role="button">Comenzar ahora</a></p>
	    </div>
	    <div class="col-lg-6"></div>
	  </div>
        </div>
      </div>
    </div>
    <div class="item active">
      <?= $this->Html->image('banner.png', [
	      'alt' => 'Controla-banner',
	      'class' => 'img-responsive'
	    ]); ?>
      <div class="container">
        <div class="carousel-caption">
	  <div class="row">
	    <div class="col-lg-6">
	      <h1 style="text-transform: uppercase"><?=__('Aumente el control y producción de su negocio'); ?></h1><hr>
              <p><?=__('CONTROLA informa en todo momento, sobre la base de la información recibida, sobre el estado del almacén.'); ?></p>
              <p><a class="btn btn-lg btn-success" href="/begin" role="button">Comenzar ahora</a></p>
	    </div>
	    <div class="col-lg-6"></div>
	  </div>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
