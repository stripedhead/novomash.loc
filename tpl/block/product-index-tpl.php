<?php include ("navbar-tpl.php");?>
<?php

// Колонки БД которые будут группирвать список продукции
$arr_group = def_list_group ($col_group);
$arr_type_product = def_list_group ($col_type);
list($arr_type_product[2], $arr_type_product[4]) = array($arr_type_product[4], $arr_type_product[2]);
?>
<div class="container" >
<h1 class="header-page"><?php echo $init_arr[0];?></h1>
<p>Конвейерное оборудование и комплектующие выпускаемое <?php echo $corp_name;?>.<br>
В каталоге дана краткая характеристика и описание основных параметров транспортного оборудования.</p>
</div>

<div class="container">
<div class="row">
<?php 
for($t=1; $t < $arr_type_product[0]+1; $t++)
{	
	echo '<div class="col-sm-6">'.$BR;
	echo '<div class="well well-sm">'.$BR;
	
	echo '<h2 class="text-uppercase index-product">'.$arr_type_product[$t].'</h2>'.$BR;
	for($g=1; $g < $arr_group[0]+1; $g++)
	{
			$result = send_query ("SELECT * FROM ".$tab_prouct_group." WHERE TYPE_PRODUCT = '".$arr_type_product[$t]."' AND GROUP_PRODUCT = '".$arr_group[$g]."';");
			if ($result -> num_rows >= 1)
			{		
				if ($arr_group[$g] == "Конвейеры ленточные") {echo '<img src="/img/slider/s02.jpg" class="img-responsive img-thumbnail" alt="Конвейеры ленточные"/>';} else
				//if ($arr_group[$g] == "Питатели") {echo '<br>'.$BR.'<img src="/img/slider/s04.jpg" class="img-responsive img-thumbnail" alt="Питатели вибрационные"/>';} else
				if ($arr_group[$g] == "Классификаторы") {echo '<img src="/img/klassifikatory.jpg" class="img-responsive img-thumbnail" alt="Классификаторы песка"/>';} else
				if ($arr_group[$g] == "Элеваторы") {echo '<br>'.$BR.'<img src="/img/ehlevatory.jpg" class="img-responsive img-thumbnail" alt="Элеваторы"/>';}
				//if ($arr_group[$g] == "Конвейеры Z - образные") {echo '<br>'.$BR.'<img src="/img/z-obr.jpg" class="img-responsive img-thumbnail" alt="Конвейеры Z - образные"/>';}
				if ($arr_group[$g] == "Конвейеры винтовые") {echo '<br>'.$BR.'<img src="/img/vintovye.jpg" class="img-responsive img-thumbnail" alt="Конвейеры винтовые"/>';}
				//if ($arr_group[$g] == "Промывка и Сортировка") {echo $BR.'<img src="/img/complex.jpg" class="img-responsive img-thumbnail" alt="Промывка и Сортировка"/>';}			
				//if ($arr_group[$g] == "Отраслевые решения") {echo '<br>'.$BR.'<img src="/img/otrasly.jpg" class="img-responsive img-thumbnail" alt="Отраслевые решения"/>';}
				echo '<h4 class="text-uppercase"><i class="fa fa-chevron-right" style=" color:#CCC;"></i> '.$arr_group[$g].'</h4>'.$BR;
				echo '<div class="list-group">'.$BR;
				while ($row = $result->fetch_assoc())
				{
					$link_list = $FL.$product_article_base.$FL.$row['ID'];
					//$link_list = $root_dir.$FL."oborudovanie".$FL.$row['ID']."-".translit($row['HEADERS']).".html#list";
					echo '	<a href="'.$link_list.'" class="list-group-item" title="'.strstr($row['ANATATIONS'], '.', true).'"><span class="badge">'.$row['ABR'].'</span>'.$row['HEADERS'].'</a></li>'.$BR;
				}
				echo '</div>'.$BR;			
			}
	}
	echo '</div>'.$BR;
	echo '</div>'.$BR;
}
?>
</div>
</div>







<?php include ("footer-tpl.php");?>
