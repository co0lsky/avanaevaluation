<?php

namespace Skychin\Avanaevaluation\Rules;

class Required implements Rule
{
	public function validate($string)
	{
		return !empty($string);
	}

	public function getErrorMessageFormat()
	{
		return 'Missing value in %s';
	}
}