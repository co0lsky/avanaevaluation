<?php

namespace Skychin\Avanaevaluation\Rules;

interface Rule
{
	public function validate($string);
	public function getErrorMessageFormat();
}