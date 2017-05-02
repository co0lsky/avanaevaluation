<?php

namespace Skychin\Avanaevaluation;

class RowError
{
	private $_SEPARATOR = ', ';

	private $row_number;
	private $errors = [];

	public function addError($error_message)
	{
		$this->errors[] = $error_message;
	}

	public function print()
	{
		return implode($this->_SEPARATOR, $this->errors);
	}
}