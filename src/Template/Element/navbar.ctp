<?php $user = $this->request->session()->read('Auth.User'); ?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="#">CONTROLA</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
	<ul class="nav navbar-nav">
          <li class="active"><a href="/"><?= __('Inicio') ?></a></li>
          <li><a href="#"><?= __('Quienes Somos') ?></a></li>
	  <li><a href="#"><?= __('Funciones') ?></a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	  <?php if($user != []){ ?>
	    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?=__('Bienvenido ') . $user['email']?> <span class="glyphicon glyphicon-user"></span></a>
              <ul class="dropdown-menu" role="menu">
		<li><a href="#"><?= __('Ingresar al Sistema'); ?></a></li>
		<li><a href="#"><?= __('Modificar Negocio'); ?></a></li>
		<li><a href="#"><?= __('Cambiar Contraseña'); ?></a></li>
		<li class="divider"></li>
		<li><a href="/logout"><?= __('Cerrar Sesión'); ?></a></li>
              </ul>
            </li>
	  <?php }else{ ?>
          <li><a href="/begin"><?=__('Registrarse')?></a></li>
	  <li><a href="/login"><?=__('Ingresar al sistema')?></a></li>
	  <?php } ?>
	</ul>
      </div>
    </div>
</nav>
