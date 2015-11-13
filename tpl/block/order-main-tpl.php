<?php include ("navbar-tpl.php");?>
<div class="container">
	<h1 class="header-page"><?php echo $init_arr[0];?></h1>
	<p>Если вы хотите заказать конвейерное оборудование <?php echo $corp_name;?>, воспользуйтесь формой или заполните <a href="<?php echo $root_dir.$FL."opros-list.php";?>" title="Документы для подбора конвейерного оборудования">опросные листы</a> по интересующему Вас <a href="<?php echo $root_dir.$FL.$product_article_base.$FL;?>" title="Каталог конвейерного оборудования»">виду оборудования</a>.</p>
<div class="row">
<div class="col-sm-8">
<div class="well well-sm">
	<h3>Форма для заказа продукции</h3>
	<p>Заполните контактную форму и мы обязательно свяжемся с вами!</p>
<?php // check for a successful form post  
if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
// check for a form error  
elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";?>
	<form role="form" method="POST" action="order-form-submission.php">
		<div class="row">
			<div class="form-group col-lg-4">
				<label for="input1">Имя</label>
				<input type="text" name="contact_name" class="form-control" id="input1">
			</div>
			<div class="form-group col-lg-4">
				<label for="input2">Email Адрес</label>
				<input type="email" name="contact_email" class="form-control" id="input2">
			</div>
			<div class="form-group col-lg-4">
				<label for="input3">Номер телефона</label>
				<input type="phone" name="contact_phone" class="form-control" id="input3">
			</div>
			<div class="clearfix"></div>
			<div class="form-group col-lg-12">
				<label for="input4">Сообщение</label>
				<textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
			</div>
			<div class="form-group col-lg-12">
				<input type="hidden" name="save" value="contact">
				<button type="submit" class="btn btn-primary">Отправить для заказа</button>
			</div>
		</div>
	</form>
</div>
</div>
<div class="col-sm-4">
<?php include ("adress-tpl.php");?>
</div>
</div>
</div>
<?php include ("footer-tpl.php");?>