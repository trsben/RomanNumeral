<?php

require_once('GeneratorInterface.php'); // require interface

class RomanNumeral_Generator implements RomanNumeral_GeneratorInterface {
	protected $conversionArray = array(
		'M' 	=> 1000,
		'CM' 	=> 900,
		'D' 	=> 500,
		'CD' 	=> 400,
		'C' 	=> 100,
		'XC' 	=> 90,
		'L' 	=> 50,
		'XL' 	=> 40,
		'X' 	=> 10,
		'IX' 	=> 9,
		'V' 	=> 5,
		'IV' 	=> 4,
		'I' 	=> 1
	);

	public function generate($paramInteger = 0) {
		// check param is integer and within range
		if ($paramInteger < 1 || $paramInteger > 3999) {
			throw new \InvalidArgumentException('Expected integer within range of 1 to 3999');
		}

		$result = '';
		$paramInteger = intval($paramInteger);

		/*
		 * Keep taking away highest value possible from conversionArray until
		 * int is equal to 0
		 */
		while ($paramInteger > 0) {
			foreach ($this->conversionArray as $romanNumeral => $integer) {
				if ($paramInteger >= $integer) {
					$paramInteger -= $integer;
					$result .= $romanNumeral;

					break; // restart from the top of conversion array
				}
			}
		}

		return $result;
	}

	public function parse($paramRomanNumeral = '') {
		// check param is string
		if (!is_string($paramRomanNumeral)) {
			throw new \InvalidArgumentException('Expected string');
		}

		$result = 0;
		$paramRomanNumeral = strtoupper($paramRomanNumeral);

		/*
		 * Search for first roman numeral in string and add numeral equivalent 
		 * to end result
		 */
		foreach ($this->conversionArray as $romanNumber => $integer) {
			while (strpos($paramRomanNumeral, $romanNumber) === 0) {
				$result += $integer;
				$paramRomanNumeral = substr($paramRomanNumeral, strlen($romanNumber));
			}
		}

		return $result;
	}	
}
