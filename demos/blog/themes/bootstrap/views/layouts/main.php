<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css">

	<?php
	$ac = Yii::app()->theme->baseUrl;
	$maps['jquery.min.js'] = $ac . '/js/jquery-3.5.1.min.js';
	$maps['jquery.js']    = $ac . '/js/jquery-3.5.1.min.js';
	$maps['popper.js']    = $ac . '/js/popper.min.js';
	$maps['bootstrap.js'] = $ac . '/js/bootstrap.min.js';

	$cs = Yii::app()->clientScript;
	// menggabungkan javascript yang bawaan yii dengan kita
	$cs->scriptMap = array_merge($cs->scriptMap, $maps);

	Yii::app()->clientScript->registerScriptFile('jquery.min.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('popper.js', CClientScript::POS_END);
	Yii::app()->clientScript->registerScriptFile('bootstrap.js', CClientScript::POS_END);
	?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container" id="page">

		<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#A3A3fF;">
			<a class="navbar-brand" href="#">Inventory</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php $this->widget('zii.widgets.CMenu', array(
					'items' => array(
						//diakses ketika belum login
						array(
							'label' => 'Home', 'url' => array('/site/index'),
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'About', 'url' => array('/site/page', 'view' => 'about'),
							'visible' => Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Contact', 'url' => array('/site/contact'),
							'visible' => Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Login', 'url' => array('/site/login'),
							'visible' => Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						//diakses ketika sudah login
						array(
							'label' => 'Stock', 'url' => array('/stock/index'),
							'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Barang Masuk', 'url' => array('/Barangmasuk/index'),
							'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Barang Keluar', 'url' => array('/Barangkeluar/index'),
							'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						),
						array(
							'label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest,
							'itemOptions' => array('class' => 'nav-item'),
							'linkOptions' => array('class' => 'nav-link'),
						)
					),
					'htmlOptions' => array('class' => 'nav mr-auto'),
					'submenuHtmlOptions' => array('class' => 'nav-item'),
				)); ?>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<div class="container" style="margin-top:20px;">
			<!-- header -->

			<div id="mainmenu">

			</div><!-- mainmenu -->
			<?php if (isset($this->breadcrumbs)) : ?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links' => $this->breadcrumbs,
				)); ?>
				<!-- breadcrumbs -->
			<?php endif ?>

			<?php echo $content; ?>


</body>

</html>