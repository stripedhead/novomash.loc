<!-- ===================================== product header -->
<div style="margin: 0 17px;"> 
<div class="core" style="padding:15px 15px 0 15px; margin: 0 -15px; margin-bottom:2px; border-radius: 4px 4px 0 0;">
<?php if (!$product_info [15] == NULL) {?>
<div class="row">
	<div class="col-md-8">
		<h1 class="text-uppercase" style="padding:0; margin:0 0 10px 0; font-size:1.5em; font-weight:bold"><?php echo $hdr;?> <small><?php echo $abr; ?></small></h1>
	</div>
	<div class="col-md-4">
		<div class="btn-group btn-group-justified hidden-md hidden-lg" role="group" aria-label="Justified button group" style="margin-bottom:15px;"> <a href="<?php echo $root_dir.$FL."opros-list.php";?>" class="btn btn-default btn-sm" role="button" title="Весь перечень опросных листов"><strong>ОПРОСНЫЕ ЛИСТЫ</strong></a> <a href="<?php echo $dir_files_opros_list.$FL.$product_info [15];?>" title="Загрузить в формате MS Word" target="_blank" class="btn btn-default btn-sm" role="button"><i class="fa fa-file-word-o"></i> Word</a> 
			<!-- <a href="#" class="btn btn-default btn-sm" role="button" title="Загрузить в формат Adobe PDF"><i class="fa fa-file-pdf-o"></i> PDF</a> --> 
		</div>
	</div>
</div>
<?php }
else 
{?>
<h1 class="text-uppercase" style="padding:0; margin:0 0 10px 0; font-size:1.25em; font-weight:bold"><?php echo $hdr;?> <small><?php echo $abr;?></small></h1>
<?php }?>
</div>
<!-- ===================================== row gallerey primary image product -->
<div id="list" class="row">
<div class="col-sm-12 core" style="min-height:280px; background-color: #CCCCCC; background-image: url(/img/int/primary-img-bkgr-gray.jpg); background-repeat: no-repeat; background-position: right top;">
	<?php if ((!tst_file ($dir_img_products.$FL.$product_info [3])) OR ($product_info [3] == NULL)) {
$img0 = $dir_img_int.$FL.'not-photo.png';?>
	<img src="<?php echo $img0; ?>" alt="<?php echo $hdr;?>" width="128" height="128" style="background:none; margin-left:45%; margin-top: 64px;;">
	<?php } 
else { 
$img0 = $dir_img_products.$FL.$product_info [3];?>
	<a href="<?php echo $img0; ?>" data-toggle="lightbox" data-gallery="global-gallery" data-parent=".container" data-title="<?php echo $hdr;?>" data-footer="Для выхода из окна, нажмите <kbd>Esc</kbd>. Листать вперед <kbd>←</kbd>, назад <kbd>→</kbd>.">
	<div class="caption-my">
		<div class="caption-my-content"> <i class="fa fa-search-plus fa-2x"></i> </div>
	</div>
	<img src="<?php echo $img0; ?>" alt="<?php echo $hdr;?>" class="img-responsive pbar"> </a>
	<?php }?>
</div>
</div>
<!-- /row gallerey primary image product -->
<div id="info" class="row"> 
<?php if ((tst_file ($dir_img_products.$FL.$product_info [5])) AND (!$product_info [5] == NULL)) {?>
<!-- ===================================== Slide N1 -->
<div class="col-xs-6 col-sm-3 core">
	<?php $img1 = $dir_img_products.$FL.$product_info [5];?>
	<a href="<?php echo $img1; ?>" data-toggle="lightbox" data-gallery="global-gallery" data-parent=".container" data-title="<?php echo $hdr;?>" data-footer="Для выхода из окна, нажмите <kbd>Esc</kbd>. Листать вперед <kbd>←</kbd>, назад <kbd>→</kbd>">
	<div class="caption-my">
		<div class="caption-my-content"> <i class="fa fa-search-plus fa-2x"></i> </div>
	</div>
	<img src="<?php echo $img1; ?>" alt="<?php echo $hdr;?>" class="img-responsive pbar hbar"> </a> </div>
<?php }?>
<?php if ((tst_file ($dir_img_products.$FL.$product_info [6])) AND (!$product_info [6] == NULL)) {?>
<!-- ===================================== Slide N2 -->
<div class="col-xs-6 col-sm-3 core">
	<?php $img2 = $dir_img_products.$FL.$product_info [6];?>
	<a href="<?php echo $img2; ?>" data-toggle="lightbox" data-gallery="global-gallery" data-parent=".container" data-title="<?php echo $hdr;?>" data-footer="Для выхода из окна, нажмите <kbd>Esc</kbd>. Листать вперед <kbd>←</kbd>, назад <kbd>→</kbd>">
	<div class="caption-my">
		<div class="caption-my-content"> <i class="fa fa-search-plus fa-2x"></i> </div>
	</div>
	<img src="<?php echo $img2; ?>" alt="<?php echo $hdr;?>" class="img-responsive pbar hbar"> </a> </div>
<?php }?>
<?php if ((tst_file ($dir_img_products.$FL.$product_info [7])) AND (!$product_info [7] == NULL)) {?>
<!-- ===================================== Slide N3 -->
<div class="col-xs-6 col-sm-3 core">
	<?php $img3 = $dir_img_products.$FL.$product_info [7];?>
	<a href="<?php echo $img3; ?>" data-toggle="lightbox" data-gallery="global-gallery" data-parent=".container" data-title="<?php echo $hdr;?>" data-footer="Для выхода из окна, нажмите <kbd>Esc</kbd>. Листать вперед <kbd>←</kbd>, назад <kbd>→</kbd>">
	<div class="caption-my">
		<div class="caption-my-content"> <i class="fa fa-search-plus fa-2x"></i> </div>
	</div>
	<img src="<?php echo $img3; ?>" alt="<?php echo $hdr;?>" class="img-responsive pbar hbar"> </a> </div>
<?php }?>
<?php if ((tst_file ($dir_img_products.$FL.$product_info [8])) AND (!$product_info [8] == NULL)) {?>
<!-- ===================================== Slide N4 -->
<div class="col-xs-6 col-sm-3 core">
	<?php $img4 = $dir_img_products.$FL.$product_info [8];?>
	<a href="<?php echo $img4; ?>" data-toggle="lightbox" data-gallery="global-gallery" data-parent=".container" data-title="<?php echo $hdr;?>" data-footer="Для выхода из окна, нажмите <kbd>Esc</kbd>. Листать вперед <kbd>←</kbd>, назад <kbd>→</kbd>">
	<div class="caption-my">
		<div class="caption-my-content"> <i class="fa fa-search-plus fa-2x"></i> </div>
	</div>
	<img src="<?php echo $img4; ?>" alt="<?php echo $hdr;?>" class="img-responsive pbar hbar"> </a> </div>
<?php }?>
</div>
</div>
