<?php
/**
 * Synga Inheritance Finder
 * @author      Roy Pouls
 * @copytright  2016 Roy Pouls / Synga (http://www.synga.nl)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        https://github.com/synga-nl/inheritance-finder
 */

namespace Synga\ConsoleAbstraction\Laravel;


use Illuminate\Console\Command;
use Synga\ConsoleAbstraction\Contracts\OutputInterface;

class Output implements OutputInterface
{
    /**
     * @var Command
     */
    protected $command;

    public function __construct(Command $command) {
        $this->command = $command;
    }

    /**
     * @param Command $command
     */
    public function setCommand(Command $command) {
        $this->command = $command;
    }

    /**
     * @param $question
     * @param array $choices
     * @param null $default
     * @return string
     */
    public function askWithCompletion($question, array $choices, $default = null) {
        return $this->command->askWithCompletion($question, $choices, $default);
    }

    /**
     * @param $question
     * @param null $default
     * @return string
     */
    public function ask($question, $default = null) {
        return $this->command->ask($question, $default);
    }

    /**
     * @param $question
     * @param bool $fallback
     * @return string
     */
    public function secret($question, $fallback = true) {
        return $this->command->secret($question, $fallback);
    }

    /**
     * @param $question
     * @param bool $default
     * @return bool
     */
    public function confirm($question, $default = false) {
        return $this->command->confirm($question, $default);
    }

    /**
     * @param $question
     * @param array $choices
     * @param null $default
     * @param null $attempts
     * @param null $multiple
     * @return string
     */
    public function choice($question, array $choices, $default = null, $attempts = null, $multiple = null) {
        return $this->command->choice($question, $choices, $default, $attempts, $multiple);
    }

    /**
     * @param $question
     * @param array $choices
     * @param null $default
     * @return string
     */
    public function anticipate($question, array $choices, $default = null) {
        return $this->command->anticipate($question, $choices, $default);
    }

    /**
     * @param $string
     */
    public function info($string) {
        $this->command->info($string);
    }

    /**
     * @param $string
     */
    public function warning($string) {
        $this->command->warn($string);
    }

    /**
     * @param $string
     */
    public function error($string) {
        $this->command->error($string);
    }

    /**
     * @param $string
     * @param null $style
     * @param null $verbosity
     */
    public function line($string, $style = null, $verbosity = null) {
        $this->command->line($string, $style, $verbosity);
    }

    /**
     * @param array $headers
     * @param $rows
     * @param string $style
     */
    public function table(array $headers, $rows, $style = 'default') {
        $this->command->table($headers, $rows, $style);
    }

    /**
     * @param int $max
     * @return mixed
     */
    public function createProgressBar($max = 0) {
        return $this->command->createProgressBar($max);
    }
}