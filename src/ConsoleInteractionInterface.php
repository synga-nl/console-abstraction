<?php
namespace Synga\ConsoleAbstraction;

interface ConsoleInteractionInterface
{
    public function ask($question, $default = null);

    public function secret($question, $fallback = true);

    public function confirm($question, $default = false);

    public function choice($question, array $choices, $default = null, $attempts = null, $multiple = null);

    public function anticipate($question, array $choices, $default = null);

    public function info($string);

    public function warn($string);

    public function error($string);

    public function line($string, $style = null, $verbosity = null);

    public function table(array $headers, $rows, $style = 'default');

    public function createProgressBar($max = 0);
}