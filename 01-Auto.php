<?php 

// 自增自减

	// ++/--
		
		// ++$a/--$a    先加减再返回值
		// $a++/$a--    先返回值再加减


$a=1;
$b=2;

  // 2|2     2|3
$c = ++$a - $b++;

echo $a,$b,$c;

echo '<hr>';


 ?>