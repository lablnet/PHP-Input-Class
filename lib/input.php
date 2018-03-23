<?php 
	 /**
	 * Create instence of class
	 *
	 * @return object
	 */	 
function object(){

	return new PhpInput;

}
	 /**
	 * Accpet input
	 *
	 * @param $name of input
	 *
	 * @return string
	 */
function input($name){

	return escape(object()->Input(['name' => $name]));

}
	 /**
	 * Escape input
	 *
	 * @param $data of input	 
	 *
	 * @return string
	 */
function escape($data){

	return object()->CleanInput(['input' => $data, 'type' => 'secured']);

}
	 /**
	 * Check whether request ajax or not
	 *
	 * @param $name of input request	 
	 *
	 * @return object
	 */
function is_submit($name){

	return object()->IsFromSubmit($name);

}
	 /**
	 * Restore new lines
	 *
	 * @param $str of string	 
	 *
	 * @return string
	 */
function restore_new_lines($str){

	return object()->RestoreLineBreaks(['str'=>$str]);

}
