<?php
function same_var_defined_in_closure() {

    $temp1 = 1;
    $a_closure = function () {
        $temp1 = 10;
        return $temp1 + 2;
    };

    return [$a_closure(), $temp1];
}

// Modifica temp1 o crea una nueva var temp1?
print_r(same_var_defined_in_closure());
// Se puede hacer que modifique $temp1 del outer-context? --> usar use (&$temp1)
