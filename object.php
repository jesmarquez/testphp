<?php
// Declarar una simple función para devolver un 
// array de nuestro objeto
function get_students($obj)
{
    if(!is_object($obj)) {
        return false;
    }

    return $obj->students;
}

function get_idnumber($obj){
	if(!is_object($obj)) {
		return false;
	}
	
	return $obj->idnumber;
}

// Declara una nueva instancia de clase y rellena 
// algunos valores
$obj = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');
$obj->idnumber = 'number1';

var_dump(get_students(null));
var_dump(get_students($obj));
var_dump(get_idnumber($obj));

?>