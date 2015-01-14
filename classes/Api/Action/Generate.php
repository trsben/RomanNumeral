<?php

class Api_Action_Generate extends Api_Action {
	public function process() {
		$generator = new RomanNumeral_Generator();

		try {
			$result = $generator->generate($this->data['param']);
		}
		catch (Exception $e) {
			$result = 'Please provide an integer between 1 and 3999';
		}

		return array(
			'status' => '200',
			'result' => $result
		);
	}
}
