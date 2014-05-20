<?php namespace HireMe\Components;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hire\Components\FieldBuilder
 */
class Field extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'field'; }

}
