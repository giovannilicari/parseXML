<?php
//memcheck.php
/**
 * Gets peak memory usage of a process in KiB from /proc.../status.
 *
 * @return int|bool VmPeak, value in KiB. False if data could not be found.
 */
function processPeakMemUsage()
{
    $status = file_get_contents('/proc/' . getmypid() . '/status'); 
    $matches = array();
    preg_match_all('/^(VmPeak):\s*([0-9]+).*$/im', $status, $matches);  
    return !isset($matches[2][0]) ? false : intval($matches[2][0]);
}
