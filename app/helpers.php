

<?php

function getFormat($number)
{
    return number_format((float)$number, 2, '.', '');  // Outputs -> 105.00
}
