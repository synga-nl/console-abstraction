<?php
/**
 * Synga Inheritance Finder
 * @author      Roy Pouls
 * @copytright  2016 Roy Pouls / Synga (http://www.synga.nl)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        https://github.com/synga-nl/inheritance-finder
 */

namespace Synga\ConsoleAbstraction\Contracts;


interface OutputInterface
{
    public function ask($question, $default = null);

    public function secret($question, $fallback = true);

    public function confirm($question, $default = false);

    public function choice($question, array $choices, $default = null, $attempts = null, $multiple = null);

    public function anticipate($question, array $choices, $default = null);

    public function info($string);

    public function warning($string);

    public function error($string);

    public function line($string, $style = null, $verbosity = null);

    public function table(array $headers, $rows, $style = 'default');

    public function createProgressBar($max = 0);
}