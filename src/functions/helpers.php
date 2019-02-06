<?php
if (!function_exists('input')) {
    function input($key)
    {
        return \Lablnet\Input::input($key);
    }
}
if (!function_exists('escape')) {
    function escape($str, $type = 'secured')
    {
        return \Lablnet\Input::clean($str, $type);
    }
}
if (!function_exists('restore_line_break')) {
    function restore_line_break($input)
    {
        return \Lablnet\Input::restoreLineBreaks($input);
    }
}
if (!function_exists('is_ajax')) {
	function is_ajax() 
	{
		return \Lablnet\Input::isAjax();
	}
}
