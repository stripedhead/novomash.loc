<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<?php if (!$mode_CDN) {?>
<script src="<?php echo $dir_jquery;?>"></script>
<script src="<?php echo $dir_bootstrap_js;?>"></script>
<?php } else {?>
<script src="<?php echo $CDN_jquery;?>"></script>
<script src="<?php echo $CDN_bootstrap_js;?>"></script>
<?php }?>
<script src="<?php echo $dir_js_vendor.$FL."ekko-lightbox.min.js";?>"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#products_affix').affix({
  offset: {
    top: 100
  }
})

$(window).scroll(function (){
			if ($(this).scrollTop() > 50) {
					$('#back-to-top').fadeIn();
			} else {
					$('#back-to-top').fadeOut();
			}
	});
	// scroll body to 0px on click
	$('#back-to-top').click(function () {
			$('#back-to-top').tooltip('hide');
			$('body,html').animate({
					scrollTop: 0
			}, 700);
			return false;
	});
	$('#back-to-top').tooltip('show');
});

$(document).ready(function ($) {
$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
event.preventDefault();
return $(this).ekkoLightbox();
});
});

$("a[data-toggle=popover]")
.popover()
.click(function(e) {
e.preventDefault()
})
</script> 