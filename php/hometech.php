<?php
	require('../php/header.php');
	$_SESSION['category']='../php/hometech';
?>

<?php 
	$uni = file_get_contents('../txt/unique.txt');

	if (!isset($_COOKIE['visited'])) { 
		setcookie('visited', 1, time() + 3600*24*30);
		$uni++;	
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Бытовая техника</title>
		<link rel = "stylesheet" type = "text/css" href = "../css/style_1.css">
		<link rel="icon" type="image/png" href="../img/label.png">
	</head>
	<body>
		<table cellspacing="0" width="100%" height=1500 border=0>
			<tr class=headline  height="5%">
				<td colspan="2">
					<?php
						$vis = file_get_contents('../txt/visits.txt');
						$vis++;
						file_put_contents('../txt/visits.txt', $vis);
						file_put_contents('../txt/unique.txt', $uni);
						echo 'Количество посещений страницы: '.$vis;
						echo '<br>Количество уникальных посетителей за последний месяц: '.$uni;
					?>
				</td>
				<?php require('../php/face.php'); ?>
			</tr>
			<?php require('../php/topline.php'); ?>
			<tr class = underhead height = "5%">
				<td colspan = "3">
					<p class = refer><a href = "../index.php">Главная>>></a><a href = "../php/hometech.php">Бытовая техника</a></p>
				</td>
				<?php require('../php/geo.php'); ?>
			</tr>
			
	<?php
		$arr=unserialize(file_get_contents("../txt/a.txt"));
		
		for ($i=1, $key=false;$key === false; $i++)
			$key = array_search("HOMETECH-1", $arr[$i]);
		
		echo '<tr class = good1 height = "20%">
				<td width = 25% colspan = "2">
					<img class = "goods" src = "'.$arr[$i-1]['pic'].'" width = "80%">
				</td>
				<td colspan = "4">
					<font size = "4">'.$arr[$i-1]['name'].'</font>
					<p class="fl">'.$arr[$i-1]['description'].'</p>
				</td>
				<td  colspan = "2" align = "center">
					<font size = 6>'.$arr[$i-1]['price'].'</font>
					<p><form method="post" action="../php/goodpage.php"><input type="submit" value="Купить" name="HOMETECH-1"  style="height:50px; width:100px"></form></p>
				</td>
			</tr>';
			
		for ($i=1, $key=false;$key === false; $i++)
			$key = array_search("HOMETECH-2", $arr[$i]);
	
		echo '<tr class = good2 height = "20%">
				<td width = 25% colspan = "2">
					<img class = "goods" src = "'.$arr[$i-1]['pic'].'" width = "80%">
				</td>
				<td  colspan = "4">
					<font size = "4">'.$arr[$i-1]['name'].'</font>
					<p>'.$arr[$i-1]['description'].'</p>
				</td>
				<td  colspan = "2" align = "center">
					<font size = 6>'.$arr[$i-1]['price'].'</font>
					<p><form method="post" action="../php/goodpage.php"><input type="submit" value="Купить" name="HOMETECH-2"  style="height:50px; width:100px"></form></p>
				</td>
			</tr>';
		
		for ($i=1, $key=false;$key === false; $i++)
			$key = array_search("HOMETECH-3", $arr[$i]);
		
		echo '<tr class = good3 height = "20%">
				<td width = 25% colspan = "2">
					<img class = "goods" src = "'.$arr[$i-1]['pic'].'" width = "80%">
				</td>
				<td  colspan = "4">
					<font size = "4">'.$arr[$i-1]['name'].'</font>
					<p>'.$arr[$i-1]['description'].'</p>
				</td>
				<td  colspan = "2" align = "center">
					<font size = 6>'.$arr[$i-1]['price'].'</font>
					<p><form method="post" action="../php/goodpage.php"><input type="submit" value="Купить" name="HOMETECH-3"  style="height:50px; width:100px"></form></p>
				</td>
			</tr>';
	?>
	
			<?php require('../php/down.php'); ?>
		</table>
	<body>
</html>