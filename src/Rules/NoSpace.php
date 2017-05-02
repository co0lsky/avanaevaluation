<?php

namespace Skychin\Avanaevaluation\Rules;

class NoSpace implements Rule
{
	public function validate($string)
	{
		return !preg_match("/\s/", $string);
	}

	public function getErrorMessageFormat()
	{
		return '%s should not contain any space';
	}
}