<?php namespace Akbsit\TraitSingleton;

/**
 * Trait SingletonTrait
 * @package Akbsit\TraitSingleton
 */
trait SingletonTrait
{
    /* @var $this */
    protected static $oThis;

    /* @return $this */
    public static function instance()
    {
        if (empty(static::$oThis)) {
            static::$oThis = new static();
            static::$oThis->init();
        }

        return static::$oThis;
    }

    /* @return void */
    final public static function forgetInstance()
    {
        static::$oThis = null;
    }

    /**
     * Singleton constructor
     *
     * @return void
     */
    protected function __construct()
    {
    }

    /* @return void */
    protected function init()
    {
    }
}
