<?php
namespace Synga\ConsoleAbstraction\Composer;

use Composer\IO\ConsoleIO;
use Synga\ConsoleAbstraction\Contracts\OutputInterface;

class Output implements OutputInterface
{
    /**
     * @var ConsoleIO
     */
    private $consoleIO;

    public function __construct(ConsoleIO $consoleIO) {
        $this->consoleIO = $consoleIO;
    }

    public function ask($question, $default = null) {
        $this->consoleIO->ask($question, $default);
    }

    public function secret($question, $fallback = true) {
        $this->consoleIO->askAndHideAnswer($question);
    }

    public function confirm($question, $default = false) {
        $this->consoleIO->askConfirmation($question, $default);
    }

    public function choice($question, array $choices, $default = null, $attempts = null, $multiple = null) {
        $attempts = (is_null($attempts)) ? false : $attempts;
        $multiple = (is_null($multiple)) ? false : $multiple;
        $selected = $this->consoleIO->select($question, $choices, $default, $attempts, 'Value %s is invalid', $multiple);
        if (!empty($choices[$selected])) {
            return $choices[$selected];
        }

        return $default;
    }

    public function anticipate($question, array $choices, $default = null) {
        // TODO: Implement anticipate() method.
    }

    public function info($string) {
        $this->consoleIO->write($string);
    }

    public function warning($string) {
        $this->consoleIO->write($string);
    }

    public function error($string) {
        $this->consoleIO->writeError($string);
    }

    public function line($string, $style = null, $verbosity = ConsoleIO::NORMAL) {
        $this->consoleIO->write([$string], true, $verbosity);
    }

    public function table(array $headers, $rows, $style = 'default') {
        echo '';
    }

    public function createProgressBar($max = 0) {
        echo '';
    }
}