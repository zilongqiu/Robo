<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
*/

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use Robo\Config;

class CliGuy extends \Codeception\Actor
{
    use _generated\CliGuyActions;

    /**
     * Define custom actions here
     */
}