<?php

namespace Skychin\Avanaevaluation\RuleTypes;

class Type_B implements RuleType
{

	public function getRules()
	{
		return [
			'A' => 'required',
			'B' => 'no_space',
		];
	}

}