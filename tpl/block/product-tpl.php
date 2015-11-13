<?php
$hdr = $product_info [0]; // название
$abr = $product_info [2]; // сокращенное название
$ant = $product_info [1]; // описание
include ("navbar-tpl.php");?>
<div class="clearfix"></div>
<div class="container">
<div class="row"> 
<!-- Содержимое -->
	<div class="col-md-9">
		<?php include ("breadcramp-tpl.php");?>
		<?php include ("product-gallerey1-tpl.php");?>
		<?php if (!($ant == NULL)) {;?> <p class="text-justify" style="margin-top:10px;"><?php echo $ant;?></p><?php }?>
		<?php if ($product_info[16] == 'ART') {echo '<div class="divider" id="article-complex"></div>'.$BR; echo gen_sub_product_block ($product_info [10]).$BR;;}?>
		<?php if (!($product_info[9] == NULL)) {?>
		<h3>Основные характеристики <strong><?php echo $abr; ?></strong></h3>
		<?php echo read_html_block($product_info[9]); }?>
	</div>
<!-- Правая панель -->
	<div class="col-md-3">
		<?php include ("product-side-bar-tpl.php");?>
	</div>
</div>
</div>
<?php include ("footer-tpl.php");?>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Для перехода на верх страницы" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>