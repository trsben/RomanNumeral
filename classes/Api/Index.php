<?php

class Api_Index {
	private $data;

	public function __construct($data) {
		$this->data = $data;
	}

	public function run() {
		if (isset($this->data['action'])) {
			$actionName = 'Api_Action_' . ucfirst(strtolower($this->data['action']));

			// check if valid API action
			if (!$this->validateAction($actionName)) {
				return array(
					'status' => '404',
					'result' => 'Invalid action, please select an action from the dropdown'
				);
			}
		}
		else {
			return array(
				'status' => '404',
				'result' => 'Invalid action, please select an action from the dropdown'
			);
		}

		// valid action so run!
		$apiAction = new $actionName($this->data);
		return $apiAction->process();
	}

	private function validateAction($actionName) {
		if (class_exists($actionName) && method_exists($actionName, 'process')) {
			return true;
		}

		return false;
	}
}
