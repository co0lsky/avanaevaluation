<?php

namespace Skychin\Avanaevaluation\RuleTypes;

class Type_C implements RuleType
{

	public function getRules()
	{
		return [
			'A' => 'required',
			'B' => 'required',
		];
	}

}