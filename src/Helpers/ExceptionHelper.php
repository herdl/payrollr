<?php

namespace Herdl\PayRun\Helpers;

use Herdl\PayRun\Exceptions\ModelException;

class ExceptionHelper
{
    /**
     * @param object $model
     * @throws ModelException
     */
    public static function handle(object $model)
    {
        $className = get_class($model);

        throw new ModelException("It looks like you haven't set all of the parameters for the {$className}.");
    }
}