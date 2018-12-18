<?php

	function debug($var)
	{
		if(is_array($var) or is_object($var))
		{
			echo '<pre style="font-size:28px;background-color:red;border:2px solid black;font-weight:bold;">';
				var_dump($var);
				echo ' ligne n° : ' .__LINE__ .' de type :' .gettype($var);
			echo '</pre>';
		}
		else
		{
			echo '<pre style="font-size:28px;background-color:yellow;border:2px solid black;font-weight:bold;">';
				print_r($var);
				echo ' ligne n° : ' .__LINE__ .' de type :' .gettype($var);
			echo '</pre>';
		}
	}