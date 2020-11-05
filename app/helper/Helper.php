<?php 

/**
 * 
 */
class Helper{
	
	function __construct(argument)
	{
		# code...
	}

function rupiah($angka) {
	$jadi = number_format($angka, 0, ',', '.');

	return $jadi;
}


}

 ?>