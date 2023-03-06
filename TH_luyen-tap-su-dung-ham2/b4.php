<?php
function isSubstring($arr, $sub)
{
    return strpos($arr, $sub) !== false;
}
echo isSubstring("Hello world!", "world");
echo isSubstring("Hello world!", "foo");
