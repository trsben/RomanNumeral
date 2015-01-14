<?php

function __autoload($class) {
	if (file_exists('classes/' . strtolower(str_replace('_', '/', $class)) . '.php')) {
    	require_once('classes/' . strtolower(str_replace('_', '/', $class)) . '.php');
	}
}
