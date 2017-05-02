<?php

namespace Skychin\Avanaevaluation;

use PHPExcel_IOFactory;

class ExcelValidator
{

	private $row_errors = [];

	public function process($file_name, RuleTypes\RuleType $ruleType)
	{
		$rules = $ruleType->getRules();

		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objPHPExcel = $objReader->load($file_name);
		foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
			foreach ($worksheet->getRowIterator() as $row) {
				if ($row->getRowIndex() == 1) continue;

				$errors = [];

				$columns = array_keys($rules);
				$first_column = array_shift($columns);
				$last_column = array_pop($columns);

				$cellIterator = $row->getCellIterator($first_column, $last_column);
				foreach ($cellIterator as $cell) {
					if (!is_null($cell)) {
						$rule = $this->getRule($rules[$cellIterator->key()]);
						if (!$rule->validate($cell->getValue())) {
							$errors[] = sprintf($rule->getErrorMessageFormat(), 'Field_' . $cellIterator->key());
						}
					}
				}

				if (!empty($errors))
				$this->row_errors[$row->getRowIndex()] = implode(', ', $errors);
			}
		}
	}

	public function getErrors()
	{
		return $this->row_errors;
	}

	private function getRule($rule = '')
	{
		switch ($rule) {
			case 'required': 	return new Rules\Required; break;
			case 'no_space': 	return new Rules\NoSpace; break;
			default: 			return new Rules\NoRule;
		}
	}

}