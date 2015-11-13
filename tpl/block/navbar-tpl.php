<?php $arr_link = explode(",",$init_arr [4]);?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom:0;">
<div class="container"> 
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
<!--noindex--> <a href="<?php echo $root_dir.$FL.$index_page;?>"  rel="nofollow"  class="navbar-brand" style="margin-right:6px;"><img src="<?php echo $dir_img_int.$FL.$logo_img;?>" alt="<?php echo $corp_name;?>"></a> <!--/noindex-->
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
	<?php echo gen_menu($menu, trim($arr_link[0]), trim($arr_link[1]));?>
</ul>
<div class="fcontacts navbar-text navbar-right visible-lg">
	<table>
		<tbody>
			<tr>
				<td><!--noindex--> <a href="#" rel="nofollow" class="phone" data-html="true" data-toggle="popover" data-placement="bottom" data-content="<strong><?php echo $corp_fax;?><br><?php echo $corp_add_tel;?></strong></a>" data-original-title="Контактные телефоны"> <span class="glyphicon glyphicon-earphone"></span>&nbsp;<strong><?php echo $corp_tel;?></strong></a> <!--/noindex--></td>
			</tr>
			<tr>
				<td><strong><span class="glyphicon glyphicon-envelope" style="color: #666"></span></strong>&nbsp;&nbsp;<a href="mailto:<?php echo $corp_email;?>" title="Связаться" style="font-size:14px"><?php echo $corp_email;?></a></td>
			</tr>
		</tbody>
	</table>
</div>
</div>
</div>
</nav>