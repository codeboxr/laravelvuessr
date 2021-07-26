
<?php


if (!function_exists('write_log')) {
    /**
     * Write log to log file
     *
     * @param string|array|object $log
     */
    function write_log($log)
    {
        if (env('APP_LOG_LEVEL', 'debug') == 'debug') {
            if (is_array($log) || is_object($log)) {
                file_put_contents(base_path() . '\debug.log', print_r($log, true), FILE_APPEND);
            } else if (is_bool($log)) {
                //error_log( ($log == true)? 'true': 'false' );
                file_put_contents(base_path() . '\debug.log', ($log == true) ? $log . ' is true' . PHP_EOL : $log . ' is false' . PHP_EOL, FILE_APPEND);
            } else if (is_null($log)) {
                //error_log( ($log == true)? 'true': 'false' );
                file_put_contents(base_path() . '\debug.log', 'NULL' . PHP_EOL, FILE_APPEND);
            } else {
                file_put_contents(base_path() . '\debug.log', $log, FILE_APPEND);
            }
        }
    }
}
