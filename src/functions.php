<?php

if (!function_exists('is')) {
    function is($value)
    {
        return new \Fatkulnurk\IsThirteen\Is($value);
    }
}