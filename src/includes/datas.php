<?php

$termekek = array(
    array("szilva", 3, 28),
    array("alma", 2, 35),
    array("banán", 2, 12),
    array("körte", 2, 43),
    array("barc", 2, 20)
);

function kerTermekek() {
    global $termekek;
    return $termekek;
}