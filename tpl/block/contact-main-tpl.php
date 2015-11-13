<?php include ("navbar-tpl.php");?>
<div class="container">
	<h1 class="header-page"><?php echo $init_arr[0];?></h1>
</div>

<div class="container">
<div class="row">
	<div class="col-sm-3">
	<?php include ("adress-tpl.php");?>
	</div>
	<div class="col-sm-9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2684.3148003229735!2d40.19790523302724!3d47.71713898424203!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1429168924883"></iframe>
		<h3>Свяжитесь с нами!</h3>
		<p>Если у Вас возникли вопросы или хотите получить консультацию специалиста - заполните контактную форму и мы обязательно свяжемся с вами!</p>
		<?php // check for a successful form post  
if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
// check for a form error  
elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";?>
		<form role="form" method="POST" action="contact-form-submission.php">
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
					<input type="tel" name="contact_phone" class="form-control" id="input3">
				</div>
				<div class="clearfix"></div>
				<div class="form-group col-lg-12">
					<label for="input4">Сообщение</label>
					<textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
				</div>
				<div class="form-group col-lg-12">
					<input type="hidden" name="save" value="contact">
					<button type="submit" class="btn btn-primary">Отправить</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>


<?php include ("footer-tpl.php");?>