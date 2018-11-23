<?php
/**
 * Created by PhpStorm.
 * User: WX
 * Date: 2018/11/22
 * Time: 16:00
 */
namespace King\BaseToCode\Facades;

use Illuminate\Support\Facades\Facade;

class BaseToCode extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'basetocode';
    }
}