<?php

class Test_RomanNumeralGenerator_Parse {
	protected $testData = array(
		1 		=> 'I',
		10 		=> 'X',
		123		=> 'CXXIII',
		3999	=> 'MMMCMXCIX'
	);

	public function runTests() {
		$generator = new RomanNumeral_Generator();

		foreach ($this->testData as $expectedResult => $param) {
			echo 'Testing ' . $param . ' with expected result: ' . $expectedResult;

			$actualResult = $generator->parse($param);

			if ($actualResult == $expectedResult) {
				echo ' <span class="pass">Pass, result: ' . $actualResult . '</span>';
			}
			else {
				echo ' <span class="fail">Failire, result: ' . $actualResult . '</span>';
			}

			echo '<br />';
		}
	}
}
