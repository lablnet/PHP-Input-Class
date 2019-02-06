<?php

/**
 * This file is part of the Zest Framework.
 *
 * @author   Malik Umer Farooq <lablnet01@gmail.com>
 * @author-profile https://www.facebook.com/malikumerfarooq01/
 *
 * For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * @since 1.0.0
 *
 * @license MIT
 */

namespace Lablnet;

use Lablnet\Request;

class Input
{
	
    /**
     * Determine whether the current request is Ajax/Xhr
     *
     * @note This method is not a part of Zest Framework.
     *
     * @return bool
     */	
	public static function isAjax()
	{
		$request = new Request();
		return $request->isXhr();
	}
	
    /**
     * Accpet input
     * Support get.post,put,patch,delete,others.
     *
     * @param (string) $key name of filed (required in get,post request)
     *
     * @since 1.0.0
     *
     * @return mixed
     */
    public static function input($key)
    {
        $request = new Request();
        if ($request->isGet() || $request->isHead()) {
            $string = $request->getQuery($key);
        } elseif ($request->isPost()) {
            $string = $request->getPost($key);
        } elseif ($request->isPatch()) {
            $string = $request->getPatch($key);
        } elseif ($request->isPut()) {
            $string = $request->getPut($key);
        } elseif ($request->isDelete()) {
            $string = $request->getDelete($key);
        } elseif ($request->hasFiles()) {
            $string = $request->getFiles($key);
        } else {
            parse_str(file_get_contents('php://input'), $_STR);
            $string = $_STR[$key];
        }

        return (isset($string) && !empty($string)) ? $string : false;
    }

    /**
     * Clean input.
     *
     * @param (string) $input string
     * @param (string) $type secured,root
     *
     * @since 1.0.0
     *
     * @return mixed
     */
    public static function clean($input, $type)
    {
        if (!empty($input)) {
            if (!empty($type)) {
                if ($type === 'secured') {
                    return stripslashes(trim(htmlspecialchars($input, ENT_QUOTES)));
                } elseif ($type === 'root') {
                    return stripslashes(trim(htmlspecialchars(htmlspecialchars(strip_tags($input), ENT_HTML5), ENT_QUOTES)));
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Restore new lines.
     *
     * @param (string) $str string that tobe restored new lines
     *
     * @since 1.0.0
     *
     * @return mixed
     */
    public static function restoreLineBreaks($str)
    {
        if (isset($str) and strlen($str) !== 0) {
            $result = str_replace(PHP_EOL, "\n\r<br />\n\r", $str);

            return $result;
        } else {
            return false;
        }
    }
}
