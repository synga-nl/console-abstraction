<?php
namespace Synga\ConsoleAbstraction;

use Symfony\Component\Console\Output\OutputInterface;

class SymfonyCommand implements ConsoleInteractionInterface
{
    /**
     * @var OutputInterface
     */
    protected $output;

    public function setOutput(OutputInterface $output){
        $this->output = $output;
    }

    public function ask($question, $default = null) {
        // TODO: Implement ask() method.
    }

    public function secret($question, $fallback = true) {
        // TODO: Implement secret() method.
    }

    public function confirm($question, $default = false) {
        // TODO: Implement confirm() method.
    }

    public function choice($question, array $choices, $default = null, $attempts = null, $multiple = null) {
        // TODO: Implement choice() method.
    }

    public function anticipate($question, array $choices, $default = null) {
        // TODO: Implement anticipate() method.
    }

    public function info($string) {
        // TODO: Implement info() method.
    }

    public function warn($string) {
        // TODO: Implement warn() method.
    }

    public function error($string) {
        // TODO: Implement error() method.
    }

    public function line($string, $style = null, $verbosity = null) {
        // TODO: Implement line() method.
    }

    public function table(array $headers, $rows, $style = 'default') {
        // TODO: Implement table() method.
    }

    public function createProgressBar($max = 0) {
        // TODO: Implement createProgressBar() method.
    }
}