<?php
namespace Synga\ConsoleAbstraction\Laravel;

use Symfony\Component\Console\Input\InputInterface as SymfonyInputInterface;
use Synga\ConsoleAbstraction\Contracts\InputInterface;

class Input implements InputInterface
{
    /**
     * @var SymfonyInputInterface
     */
    protected $input;

    public function __construct(SymfonyInputInterface $input) {
        $this->input = $input;
    }

    /**
     * @param SymfonyInputInterface $input
     */
    public function setInput(SymfonyInputInterface $input) {
        $this->input = $input;
    }


    public function getFirstArgument() {
        return $this->input->getFirstArgument();
    }

    public function hasParameterOption($values, $onlyParams = false) {
        return $this->input->hasParameterOption($values, $onlyParams);
    }

    public function getParameterOption($values, $default = false, $onlyParams = false) {
        return $this->input->getParameterOption($values, $default, $onlyParams);
    }

    public function validate() {
        return $this->input->validate();
    }

    public function getArguments() {
        return $this->input->getArguments();
    }

    public function getArgument($name) {
        return $this->input->getArgument($name);
    }

    public function setArgument($name, $value) {
        $this->input->setArgument($name, $value);
    }

    public function hasArgument($name) {
       $this->input->hasArgument($name);
    }

    public function getOptions() {
        return $this->input->getOptions();
    }

    public function getOption($name) {
        return $this->input->getOption($name);
    }

    public function setOption($name, $value) {
        return $this->input->setOption($name, $value);
    }

    public function hasOption($name) {
        $this->input->hasOption($name);
    }

    public function isInteractive() {
        return $this->input->isInteractive();
    }

    public function setInteractive($interactive) {
        $this->input->setInteractive($interactive);
    }
}