<?php


namespace App\Command;


use App\Application\GetUsersFromExample\GetUsersFromExampleInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleRequestCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'app:example';

    /**
     * @var GetUsersFromExampleInterface
     */
    private $service;

    public function __construct(GetUsersFromExampleInterface $service)
    {
        $this->service = $service;
        parent::__construct(null);
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->service->start();
        return Command::SUCCESS;
    }

}