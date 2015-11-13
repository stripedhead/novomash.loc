<?php include ("navbar-tpl.php");?>
<?php
// Колонки БД которые будут группирвать список продукции
$arr_group = def_list_group ($col_group);
$arr_type_product = def_list_group ($col_type);
?>
<div class="container" >
	<h1 class="header-page"><?php echo $init_arr[0];?></h1>
	<img src="<?php echo $dir_img.$FL."opros-list.jpg";?>" class="img-responsive img-thumbnail" alt="Опросные листы"/>
	<h3 style="font-weight: bold; text-transform:uppercase;">
	<i class="fa fa-file-word-o"></i>  <?php echo $init_arr[1];?>
	</h3>
	<p>Данный релиз опросных листов, содержит не полный перечень оборудования <?php echo $corp_name;?><br>
в формате MS Word 2010 или в архиве <a href="https://ru.wikipedia.org/wiki/ZIP" title="Что такое формат zip" target="_blank">zip</a> (Сдесь можно <a href="http://7-zip.org.ua/ru/" title="Сдесь можно скачать программу для работы с zip файлами" target="_blank">скачать</a> программу для работы с zip файлами).</p>
</div>
<div class="container">
<div class="row">
<?php 
for($t=1; $t < $arr_type_product[0]; $t++)
{	
	echo '<div class="col-sm-4">'.$BR;
	echo '<div class="well well-sm">'.$BR;	
	echo '<h2 class="text-uppercase index-product">'.$arr_type_product[$t].'</h2>'.$BR;
	for($g=1; $g < $arr_group[0]; $g++)
	{
			$result = send_query ("SELECT * FROM ".$tab_prouct_group." WHERE TYPE_PRODUCT = '".$arr_type_product[$t]."' AND GROUP_PRODUCT = '".$arr_group[$g]."';");
			if ($result -> num_rows >= 1)
			{		
				if (!$arr_group[$g] == $arr_type_product[$t]) {;
				echo '<h4 class="text-uppercase"><i class="fa fa-chevron-right" style=" color:#CCC;"></i> '.$arr_group[$g].'</h4>'.$BR;}
				echo '<div class="list-group">'.$BR;
				while ($row = $result->fetch_assoc())
				{	
					//echo '	<a href="'.$root_dir.$BFL.$product_page_name.'?p_NM='.translit($row['HEADERS']).'&p_ID='.$row['ID'].'" class="list-group-item" title="'.strstr($row['ANATATIONS'], '.', true).'"><span class="badge">'.$row['ABR'].'</span>'.$row['HEADERS'].'</a></li>'.$BR;
					if (!$row['OPROS_LIST'] == NULL)
					{
							echo '	<a href="'.$dir_files_opros_list.$FL.$row['OPROS_LIST'].'" target="_blank" style="color: #337ab7;" class="list-group-item" title="Скачать опросной лист"><i class="fa fa-link" style="color:#000;"></i> '.$row['HEADERS'].'</a></li>'.$BR;
					}
					else
					{
						echo '	<a href="#" class="list-group-item disabled"><i class="fa fa-chain-broken"></i> '.$row['HEADERS'].'</a></li>'.$BR;
					}
					
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