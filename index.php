<!DOCTYPE html><html><head><meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'></head><body>

<h1>Model-View-Controller</h1>


<form action="" method="post">
	<h3>Нахождение площади треугольника:</h3><br>
	<h5>Введите основание треугольника:</h5><input type="text" name="b" placeholder="b" value="<?php echo $_POST['b'] ?>"<br>
	<h5>Введите высоту треугольника:</h5><input type="text" name="h" placeholder="h" value="<?php echo $_POST['h'] ?>"<br>

	<br><br><input type="submit" value="Решить">
</form>

</body></html>



<?php


function compute($b,$h){
	if ($b<0 or $h<0){
		echo "Значения должны быть положительными<br>";
		return "Ошибка<br>";
	}

	$result = 0.5 * $b * $h;

	return $result;
}









$b = (int)$_POST['b']; 
$h = (int)$_POST['h']; 
if (!is_numeric($b) or !is_numeric($h)){
	echo "Значения должно быть числовым<br>";
	return;
}
	if ( $_POST['b'] == '' or $_POST['h'] == '') {
		echo 'Заполните все ячейки!!<br>';
		return;
	}


$result = compute($b,$h);
echo "Площадь треугольника = " . $result;

?>