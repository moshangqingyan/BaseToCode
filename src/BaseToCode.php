<?php
/**
 * Created by PhpStorm.
 * User: WX
 * Date: 2018/11/22
 * Time: 15:55
 */
namespace King\BaseToCode;

use King\BaseToCode\aip\AipOcr;
class BaseToCode
{
    public static function index($image)
    {
        $orc = new AipOcr(config('basetocode.APP_ID'),config('basetocode.API_KEY'),config('basetocode.SECRET_KEY'));
        $response = $orc->basicGeneral(base64_decode($image), config('basetocode.OPTIONS'));
        if (is_array($response) && isset($response['words_result'])) {
            $words = array_get($response, 'words_result.0.words');
            preg_match_all('/\w+/',$words,$arr);
            $word = join('',$arr[0]);
            return $word;
        } else {
            return false;
        }
    }
}