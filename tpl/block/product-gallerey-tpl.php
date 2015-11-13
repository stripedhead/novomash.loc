<?php
$buffer_gallery = NULL; 
$img_not_link = $dir_img_int.$FL."not-photo.png"; // Изображение по умолчанию (если нет в наличии)
$img_dir_link = array ($product_info [3],$product_info [5],$product_info [6],$product_info [7],$product_info [8]);
$slide_info = "Для выхода из окна - <kbd>Esc</kbd> Листать - вперед <kbd>←</kbd> назад <kbd>→</kbd>";




foreach ($img_dir_link as $key => $value)
{
	if ($value == NULL)
	{
		$img_dir_link [$key] = $img_not_link;
	}
	else
	{
		if (tst_file ($dir_img_products.$FL.$img_dir_link [$key]))
		{
			$img_dir_link [$key] = $dir_img_products.$FL.$img_dir_link [$key];
		}
		else
		{
			$img_dir_link [$key] = $img_not_link;
		}
	}
}

if (($img_dir_link[1] == $img_not_link) AND ($img_dir_link[2] == $img_not_link) AND ($img_dir_link[3] == $img_not_link) AND 		($img_dir_link[4] == $img_not_link))
{
	$buffer_gallery = <<< BUFFER_BLOCK
<div class="row" style="margin: 0;">
<div class="col-sm-12 core" style="padding:0;">
	<img src="$img_dir_link[0]" class="img-responsive"/>
</div>
</div>
BUFFER_BLOCK;
}
else
{
	$buffer_gallery = <<< BUFFER_BLOCK
<div id="g61" class="row" style="margin: 0;">
<!-- padding up right bottone left -->
<div class="col-sm-6 core" style="padding:0;">
	<a href="$img_dir_link[0]" data-toggle="lightbox" data-gallery="product-photo" data-parent=".container" data-title="$hdr" data-footer="$slide_info">
	<div class="caption-my"><div class="caption-my-content"><i class="fa fa-search-plus fa-2x"></i></div></div>
	<img src="$img_dir_link[0]" alt="$hdr" class="img-responsive"></a>
</div>
<div class="col-sm-6" style="padding:0 -17px 0 0;">
	<div class="row">
		<div class="col-sm-6 col-xs-6 core" style="padding:0;">
			<a href="$img_dir_link[1]" data-toggle="lightbox" data-gallery="product-photo" data-parent=".container" data-title="$hdr" data-footer="$slide_info">
			<div class="caption-my"><div class="caption-my-content"><i class="fa fa-search-plus fa-2x"></i></div></div>
			<img src="$img_dir_link[1]" alt="$hdr" class="img-responsive"></a>
		</div>
		<div class="col-sm-6 col-xs-6 core" style="padding:0;">
			<a href="$img_dir_link[2]" data-toggle="lightbox" data-gallery="product-photo" data-parent=".container" data-title="$hdr" data-footer="$slide_info">
			<div class="caption-my"><div class="caption-my-content"><i class="fa fa-search-plus fa-2x"></i></div></div>
			<img src="$img_dir_link[2]" alt="$hdr" class="img-responsive"></a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-xs-6 core" style="padding:0;">
			<a href="$img_dir_link[3]" data-toggle="lightbox" data-gallery="product-photo" data-parent=".container" data-title="$hdr" data-footer="$slide_info">
			<div class="caption-my"><div class="caption-my-content"><i class="fa fa-search-plus fa-2x"></i></div></div>
			<img src="$img_dir_link[3]" alt="$hdr" class="img-responsive"></a>
		</div>
		<div class="col-sm-6 col-xs-6 core" style="padding:0;">
			<a href="$img_dir_link[4]" data-toggle="lightbox" data-gallery="product-photo" data-parent=".container" data-title="$hdr" data-footer="$slide_info">
			<div class="caption-my"><div class="caption-my-content"><i class="fa fa-search-plus fa-2x"></i></div></div>
			<img src="$img_dir_link[4]" alt="$hdr" class="img-responsive"></a>
		</div>
	</div>
</div>
</div>
BUFFER_BLOCK;
}
?>
<div class="core" style="padding:15px 15px 0 15px; margin-bottom:1px; border-radius: 4px 4px 0 0;">
<h1 class="text-uppercase" style="padding:0; margin:0 0 10px 0; font-size:1.5em; font-weight:bold;">
	<?php echo $hdr;?> <small>(<?php echo $abr; ?>)</small>
</h1>
</div>
<?php echo $buffer_gallery;?>




