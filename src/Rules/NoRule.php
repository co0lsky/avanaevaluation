<?php

namespace Skychin\Avanaevaluation\Rules;

class NoRule implements Rule
{
	public function validate($string)
	{
		return true;
	}

	public function getErrorMessageFormat()
	{
		return '';
	}
}