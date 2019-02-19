<?php

ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');
date_default_timezone_set('Europe/Stockholm');

defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__)).'/../application');
require APPLICATION_PATH.'/config.php';

set_include_path(
    implode(PATH_SEPARATOR,
        array(
            get_include_path(),
            APPLICATION_PATH.'/../library'
        )
    )
);

require APPLICATION_PATH.'/init.php';

try
{
        Init::run();
}
catch(Exception $ex)
{
        try
        {
            $xml =  '<error>'.PHP_EOL;
            $xml .= '<subsystem>RH-admin</subsystem>'.PHP_EOL;
            $xml .= '<timestamp>'.date('Y-m-d H:i:s').'</timestamp>'.PHP_EOL;
            $xml .= '<ip>cron</ip>'.PHP_EOL;
            $xml .= '<message>'.$ex->getMessage().'</message>'.PHP_EOL;
            $xml .= '<code>'.$ex->getCode().'</code>'.PHP_EOL;
            $xml .= '<file>'.$ex->getFile().'</file>'.PHP_EOL;
            $xml .= '<line>'.$ex->getLine().'</line>'.PHP_EOL;
            $xml .= '<trace>'.$ex->getTraceAsString().'</trace>'.PHP_EOL;
            $xml .= '</error>'.PHP_EOL.PHP_EOL;

            $ts = date('Y-m-d_H');
            $fh = fopen('C:/webbplatser/RH-admin/admin/syslog/syslog_'.$ts.'.xml', 'a');
            if($fh)
            {
                    fwrite($fh, $xml);
                    fclose($fh);
            }
        }
        catch(Exception $e){}

        ob_get_clean();
        die('We\'re experiencing system instability, contact system administrator!');
}

?>