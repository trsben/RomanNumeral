<?php 

class Helper {
	public static function output($data) {
		echo ")]}',\n" . json_encode($data);
	}
}
