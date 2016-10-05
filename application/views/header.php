<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php foreach ($hakkimizda as $rs ) {?>
		<title><?php echo $rs->title;?></title>
		<meta name="description" content="<?php echo $rs->description;?>">
    <meta name="keywords" content="<?php echo $rs->keywords;?>">
    	<?php }?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo site_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/coin-slider.css'); ?>" />
<script type="text/javascript" src="<?php echo site_url('assets/js/cufon-yui.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/cufon-titillium-600.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery-1.4.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/script.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/coin-slider.min.js'); ?>"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class="active"><?php echo anchor('', '<span>Ana Sayfa</span>'); ?></li>
          <li><?php echo anchor('kitap_tarama', '<span>Kitap Tarama</span>','target="_blank"'); ?></li>
          <li><?php echo anchor('hakkimizda', '<span>Hakkımızda</span>','target="_blank"'); ?></li>
          <li><?php echo anchor('iletisim', '<span>İletişim</span>','target="_blank"'); ?></li>
          <li><?php echo anchor('contact', '<span>Bize Ulaşın</span>','target="_blank"'); ?></li>

        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo">
        <h1><a href="index.php"> <?php echo $hakkimizda[0]->title; ?></a></h1>
      </div>
      <div class="clr"></div>
