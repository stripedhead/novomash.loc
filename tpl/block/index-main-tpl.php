<!-- Навигация (Главное меню) -->
<?php include ("navbar-tpl.php");?>
<!-- Слайдер -->
<div class="container" style="padding:0;">
<?php include ("carousel-tpl.php");?>
</div>
<div class="container">
<!--  Блок витрины продукции -->
<?php
$arr = read_product_type ();
$value_to_delete = 'Технологические линии и комплексы' ; //Элемент с этим значением нужно удалить

if(($key = array_search($value_to_delete, $arr)) !== FALSE){
unset($arr[$key]);
}
?>
<div class="divider" id="article-complex"></div>
	<div class="tech_group">
		<h1 class="text-center"><?php echo $value_to_delete;?></h1>
	</div>
	<?php echo gen_product_block($value_to_delete, 4);?>
<?php	
foreach($arr as $key => $value)
{
 
echo '<div class="divider" id="article'.$key.'"></div>';
echo '
<div class="tech_group">
<h1 class="text-center">'.$value.'</h1>
</div>
'.gen_product_block($value, 4).$BR;
} 
?>
<!-- Секция дополнительной информации -->
<div class="row">
	<div class="col-lg-8 col-md-8">
		<h4>Заказ оборудования</h4>
		<p>Вы можете заказать любое интересующие Вас оборудование, заполнив форму. Специалисты нашей компании свяжутся с Вами и ответят на все вопросы, дадут рекомендации. Так же мы расчитаем характеристики и производительность оборудования под Ваши требования.</p>
	</div>
	<div class="col-lg-4 col-md-4"> <a class="btn btn-lg btn-primary pull-right" href="order.php">Отправить запрос</a> </div>
</div>
</div>
</div>
<!-- Подвал страницы -->
<?php include ("footer-tpl.php");?>

<!--noindex-->
<a href="#" rel="nofollow" id="back-to-top" class="btn btn-primary btn-lg back-to-top" role="button" title="Для перехода на верх страницы" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
<!--/noindex-->