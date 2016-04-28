<?php
namespace Synga\ConsoleAbstraction\Laravel;

use Composer\Script\Event;
use Synga\ConsoleAbstraction\Composer\Input;
use Synga\ConsoleAbstraction\Composer\Output;
use Synga\ConsoleAbstraction\ConsoleInteraction;
use Synga\ConsoleAbstraction\Contracts\ConsoleInteractionInterface;

/**
 * Class ComposerCommandAbstract
 * @package Synga\ConsoleAbstraction\Laravel
 */
abstract class ComposerCommandAbstract
{
    /**
     * @var \Illuminate\Foundation\Application
     */
    protected static $app;

    /**
     * @var \Illuminate\Contracts\Console\Kernel
     */
    protected static $kernel;

    /**
     * @var ConsoleInteractionInterface
     */
    protected static $consoleInteraction;

    /**
     * Boots Laravel so we can use all its features.
     *
     * @param Event $event
     * @return \Illuminate\Foundation\Application
     */
    protected static function bootLaravel(Event $event) {
        $dir = dirname($event->getComposer()->getConfig()->get('vendor-dir'));

        require $dir . '/bootstrap/autoload.php';

        /* @var $app \Illuminate\Foundation\Application */
        self::$app = require_once $dir . '/bootstrap/app.php';

        self::$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);

        self::$kernel->bootstrap();

        self::instantiateConsoleInteraction($event);
    }

    /**
     * Gets the console interaction object, So we can use all the command line features of composer.
     *
     * @param Event $event
     * @return ConsoleInteraction
     */
    protected static function instantiateConsoleInteraction(Event $event) {
        $consoleIO                = $event->getIO();
        self::$consoleInteraction = new ConsoleInteraction(new Input($consoleIO), new Output($consoleIO));
    }
}