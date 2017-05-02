<?php

namespace Skychin\Avanaevaluation\RuleTypes;

class Type_A implements RuleType
{

	public function getRules()
	{
		return [
			'A' => 'required',
			'B' => 'no_space',
			'C' => '',
			'D' => 'required',
			'E' => 'required',
		];
	}

}