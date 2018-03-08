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