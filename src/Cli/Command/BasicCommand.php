<?php
// src/Cli/Command/BasicCommand.php

namespace Skychin\Avanaevaluation\Cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;
use Skychin\Avanaevaluation\ExcelValidator;

class BasicCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('excel:validate')
            ->setDescription('Validate Excel Content')
            ->addArgument('file_name', InputArgument::REQUIRED, 'File name.')
            ->addArgument('rule_type', InputArgument::REQUIRED, 'Type_A or Type_B')
        ;
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $validator = new ExcelValidator;

        $type = 'Skychin\\Avanaevaluation\\RuleTypes\\' . $input->getArgument('rule_type');
        $validator->process($input->getArgument('file_name'),  new $type);
        $errors = $validator->getErrors();

        $table = new Table($output);
        $table->setHeaders(array('Row', 'Error'));

        foreach ($errors as $key => $value) {
            $table->addRow([$key, $value]);
        }

        $table->render();
    }
}