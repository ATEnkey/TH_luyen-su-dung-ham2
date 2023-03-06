<?php
function formatCurrency($num)
{
    return number_format($num, 2, '.', ',');
}
echo formatCurrency(1234567.89);
