<?php

require_once __DIR__ .'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$console = new Application('CLI with the Symfony2 Console Component', '0.1.0');

// This is the relevant addition
$console->addCommands(array(
    new Skychin\Avanaevaluation\Cli\Command\BasicCommand(),
));
// End of relevant addition

$console->run();

// use Skychin\Avanaevaluation\ExcelValidator;
// use Symfony\Component\Console\Helper\Table;

// array_shift($argv); // remove index.php
// list($file_name, $type) = $argv;

// $validator = new ExcelValidator;

// $type = 'Skychin\\Avanaevaluation\\RuleTypes\\' . $type;
// $validator->process($file_name,  new $type);
// $errors = $validator->getErrors();

// var_dump($argv);

// // echo '<table border=1>';
// // echo '<tr>';
// // echo '<td>Row</td>';
// // echo '<td>Error</td>';
// // echo '</tr>';

// // foreach ($errors as $key => $value) {
// // 	echo '<tr>';
// // 	echo '<td>' . $key . '</td>';
// // 	echo '<td>' . $value . '</td>';
// // 	echo '</tr>';
// // }

// // echo '</table>';

// $table = new Table($output);
// $table
//     ->setHeaders(array('ISBN', 'Title', 'Author'))
//     ->setRows(array(
//         array('99921-58-10-7', 'Divine Comedy', 'Dante Alighieri'),
//         array('9971-5-0210-0', 'A Tale of Two Cities', 'Charles Dickens'),
//         array('960-425-059-0', 'The Lord of the Rings', 'J. R. R. Tolkien'),
//         array('80-902734-1-6', 'And Then There Were None', 'Agatha Christie'),
//     ))
// ;
// $table->render();