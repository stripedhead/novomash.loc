<div id="products_affix" style="max-width:262px;"> 
<!-- Форма заказа звонка -->
<div class="panel-bar-main">
<!-- <div class="panel-bar-top">
	<h4 style="font-weight:bold; text-transform:uppercase; font-size:16px; margin: 0 0 5px 0">Заказ звонка</h4>
	<p><small>Просто закажите звонок, указав контактный телефон. И наши специалисты обязательно свяжутся с Вами!</small></p>
</div> -->
<?php include ("form-order-call-tpl.php");?>
</div>
<!-- Панель форм -->
<div class="panel-bar-main">
<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group"> <a href="<?php echo $root_dir.$FL."order.php";?>" class="btn btn-default btn-sm" role="button" title="Контактная форма"><strong>ФОРМА СВЯЗИ</strong></a> <a href="#" class="btn btn-default btn-sm disabled" role="button" title="Задать вопрос специалисту"><i class="fa fa-life-ring"></i> Задать вопрос</a> </div>
<div class="panel-bar-bottom"> <small>Если у Вас возникли вопросы или хотите получить консультацию специалиста</small> </div>
</div>
<!-- Панель опросных листов -->
<div class="panel-bar-main">
<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group"> <a href="<?php echo $root_dir.$FL."opros-list.php";?>" class="btn btn-default btn-sm" role="button" title="Весь перечень опросных листов"><strong>ОПРОС ЛИСТЫ</strong></a>
	<?php 
if (!tst_file ($dir_files_opros_list.$FL.$product_info [15])) {?>
	<a href="<?php echo $dir_files_opros_list.$FL.$product_info [15];?>" title="Загрузить в формате MS Word" target="_blank" class="btn btn-default btn-sm" role="button"><i class="fa fa-file-word-o"></i> Word</a>
	<?php }?>
</div>
<div class="panel-bar-bottom"> <small>Документы для подбора конвейерного оборудования <?php echo $corp_name;?> в формате MS Word 2010</small> </div>
</div>
</div>
