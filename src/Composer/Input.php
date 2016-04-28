<?php
namespace Synga\ConsoleAbstraction\Composer;

use Composer\IO\ConsoleIO;
use Synga\ConsoleAbstraction\Contracts\InputInterface;

class Input implements InputInterface
{
    /**
     * @var ConsoleIO
     */
    private $consoleIO;

    protected $options = [];

    public function __construct(ConsoleIO $consoleIO) {
        $this->consoleIO = $consoleIO;
    }

    public function getFirstArgument() {
        return null;
    }

    public function hasParameterOption($values, $onlyParams = false) {
        return false;
    }

    public function getParameterOption($values, $default = false, $onlyParams = false) {
        return false;
    }

    public function validate() {
    }

    public function getArguments() {
        return [];
    }

    public function getArgument($name) {
        return false;
    }

    public function setArgument($name, $value) {
    }

    public function hasArgument($name) {
        return false;
    }

    public function getOptions() {
        return [];
    }

    public function getOption($name) {
        if(isset($this->options[$name])){
            return $this->options[$name];
        }

        return false;
    }

    public function setOption($name, $value) {
        $this->options[$name] = $value;
    }

    public function hasOption($name) {
        return false;
    }

    public function isInteractive() {
        $this->consoleIO->isInteractive();
    }

    public function setInteractive($interactive) {
    }
}