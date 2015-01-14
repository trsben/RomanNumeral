<?php

abstract class Api_Action {
	protected $data;

	public function __construct($data) {
		$this->data = $data;
	}

	abstract protected function process();
}
