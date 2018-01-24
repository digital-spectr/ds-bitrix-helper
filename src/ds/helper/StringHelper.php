<?php
/**
 * Created by PhpStorm.
 * User: GSU
 * Date: 21.01.2018
 * Time: 16:36
 */

namespace ds\helper;

class StringHelper
{

    /**
     * проверяет, начинается ли строка с указанного символа/строки
     * @param $haystack
     * @param $needle
     * @return bool
     */
    public static function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    /**
     * проверяет, заканчивается ли строка указанным символом/строкой
     * @param $haystack
     * @param $needle
     * @return bool
     */
    public static function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }


    /**
     * сокрытие номера телефона
     * @param $strPhone
     * @return string
     */
    public static function getHiddenPhone($strPhone) {
        return substr_replace($strPhone, implode("", array_fill(0, (strlen($strPhone) - 3), '')), -(strlen($strPhone) - 3)) . implode("", array_fill(0, 10, "X"));
    }


    /**
     * мультибайтовый аналог ucfirst — преобразует первый символ строки в верхний регистр
     * @param $string
     * @return bool|string
     */
    public static function mbUcfirst($string) {
        if (!function_exists('mb_ucfirst') && function_exists('mb_substr')) {
            $string = mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
            return $string;
        }else{
            return false;
        }
    }



}