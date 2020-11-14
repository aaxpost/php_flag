<p>Задача 1</p>

<?php
	//1_1.Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть - выведите 'да', а если нет - выведите 'нет'.
	$arr = [1, 2, 6, 5];
	$flag = false;
	
	foreach ($arr as $elem) {
		if ($elem == 5) {
			$flag = true;
			break;
			}
		}
	
	if ($flag == true) {
		echo 'Цифра 5 есть в массиве'.'<br>';
		}
		else {
		echo 'Цифры 5 нет в массиве'.'<br>';	
		}
?>

<p>Задача 1_2</p>

<?php
	//1_2.Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть - выведите 'да', а если нет - выведите 'нет'.
	
	$arr1 = [1, 2, 6];
	function NumInArr($arr) {
		foreach ($arr as $elem) {
			if ($elem == 5) {
				return true;
				}		
			}
			return false;
		}
	
	if (NumInArr($arr1) == true) {
		echo 'Цифра 5 есть в массиве'.'<br>';
		}
		else {
		echo 'Цифры 5 нет в массиве'.'<br>';	
		}
?>

<p>Задача 2</p>

<?php
	//Дано число, например 31. Проверьте, что это число не делится ни на одно другое число кроме себя самого и единицы. То есть в нашем случае нужно проверить, что число 31 не делится на все числа от 2 до 30. Если число не делится - выведите 'нет', а если делится - выведите 'да'.
	
	//Задаем число для анализа
	$num = 31;
	//Формируем массив чисел, для проверки
	$arr = [2, $num - 1];
	$flag = false;
	
	//Для анализа четности и нечетности используем функцию проверки остатка
	foreach ($arr as $elem) {
		if ($num % $elem == 0) {
			$flag = true;
			break;
			}
		}
		
	if ($flag == true) {
		echo 'Делится на другое число'.'<br>';
		}
		else {
		echo 'Делится только на себя и на 1'.'<br>';	
		}
?>

<p>Задача 3</p>

<?php

//Дан массив с числами. Проверьте, есть ли в нем два одинаковых числа подряд. Если есть - выведите 'да', а если нет - выведите 'нет'.

	$a = 0;
	$b = 0;
	$flag = false;
	$arr = [1, 2, 3, 4, 5, 5];
	
		foreach ($arr as $key => $elem) {
			$a = $arr[$key];
			$b = $arr[$key + 1];
			if ($a == $b) {
				$flag = true;
				break;
			}
		}
		
		if ($flag == true) {
			echo 'Число повторяется'.'<br>';
			}
			else {
			echo 'Не повторяется'.'<br>';	
			}
?>




<?php	
	//$arr = ['a', 'a', 'a', 'b', 'b', 'c'];
	//var_dump(array_count_values($arr));

	//$arr = ['a', 'b', 'c', 'd', 'e'];
	//echo array_search('c', $arr);

?>
