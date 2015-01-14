<?php

class Api_Action_Parse extends Api_Action {
	public function process() {
		$generator = new RomanNumeral_Generator();

		try {
			$result = $generator->parse($this->data['param']);
		}
		catch (Exception $e) {
			$result = 'Please provide a valid roman numeral';
		}

		return array(
			'status' => '200',
			'result' => $result
		);
	}
}
