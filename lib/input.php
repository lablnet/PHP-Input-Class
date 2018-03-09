<?php 

function object(){

	return new PhpInput;

}

function input($name){

	return escape(object()->Input(['name' => $name]));

}

function escape($data){

	return object()->CleanInput(['input' => $data, 'type' => 'secured']);

}

function is_submit($name){

	return object()->IsFromSubmit($name);

}

function restore_new_lines($str){
	return object()->RLineBreaks(['str'=>$str]);
}