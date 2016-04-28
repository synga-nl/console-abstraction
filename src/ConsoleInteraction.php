<?php
/**
 * Synga Inheritance Finder
 * @author      Roy Pouls
 * @copytright  2016 Roy Pouls / Synga (http://www.synga.nl)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        https://github.com/synga-nl/inheritance-finder
 */

namespace Synga\ConsoleAbstraction;


use Synga\ConsoleAbstraction\Contracts\ConsoleInteractionInterface;
use Synga\ConsoleAbstraction\Contracts\InputInterface;
use Synga\ConsoleAbstraction\Contracts\OutputInterface;

class ConsoleInteraction implements ConsoleInteractionInterface
{
    /**
     * @var InputInterface
     */
    private $input;
    /**
     * @var OutputInterface
     */
    private $output;

    public function __construct(InputInterface $input, OutputInterface $output) {
        $this->input  = $input;
        $this->output = $output;
    }

    /**
     * @return InputInterface
     */
    public function getInput() {
        return $this->input;
    }

    /**
     * @return OutputInterface
     */
    public function getOutput() {
        return $this->output;
    }
}