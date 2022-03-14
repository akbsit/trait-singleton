<?php namespace Falbar\TraitSingleton;

/**
 * Trait SingletonTrait
 * @package Falbar\TraitSingleton
 */
trait SingletonTrait
{
    /* @var $this */
    protected static $oThis;

    /* @return mixed */
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
