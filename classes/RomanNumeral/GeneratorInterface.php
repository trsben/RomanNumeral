<?php

interface RomanNumeral_GeneratorInterface {
	public function generate($int); // convert from int -> roman
	public function parse($roman); // convert from roman -> int
}
