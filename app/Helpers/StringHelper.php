<?php

namespace App\Helpers;

class StringHelper
{
    /**
     * get acronym from string
     *
     * @return string
     */
    public static function acronym(string $words, int $max = -1)
    {
        $words = explode(' ', $words);
        $acronym = '';
        if ($max === -1) {
            foreach ($words as $w) {
                $acronym .= $w[0];
            }
        } else {
            $i = 1;
            foreach ($words as $w) {
                $acronym .= $w[0];
                if ($i === $max) {
                    break;
                }
                $i++;
            }
        }

        return $acronym;
    }

    /**
     * isUrl
     *
     * @return bool
     */
    public static function isUrl(string $url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            return false;
        }

        return true;
    }
}
