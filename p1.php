<?php
	$name = 'Yaroslav';
	$num = 228;
	echo $num . $name;

	$isFall = true;
	if ($isFall){
		echo " IS FALL";
	}else{
		echo " WINTER BLIZKA!";
	}

	$player = array('hero' => '123', 'hp' => '-1');
	echo $player['hp'];

	$array = array('1.chelowek', '2.chelowek', '3.chelowek');
	for ($i=0; $i < 3; $i++) { 
		echo $array[$i];
	};

	$numbers = [1,2,3,4,5];
	for ($i=0; $i < count($numbers); $i++) { 
	echo $numbers[$i];
	};

	$time = ['season' => 'osen', 'day' => 'sreda'];
	echo $time[season];

	function func()
	{
		echo 'Hello World!';
	};
	func();

	//function summ($num1 ,$num2)
	//{
		//echo $num1 + $num2
	//};
	//summ(1,2);

	function summarr($arr)
	{
		for ($i=0; $i < count($arr); $i++) { 
			$summ = $summ + $arr[$i];
			echo $summ;
		};
	};
	summarr($numbers);

	$array1 = ['p1','p2','p3','p4','p5'];
	function countp($arg)
	{
		for ($i=0; $i < count($arg); $i++) { 
			echo $arg[$i] . ' ';
		};
	};
	countp($array1);
 ?>