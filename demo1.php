<?php
/**
 * Created by PhpStorm.
 * User: guanjiashuai
 * Date: 17/1/13
 * Time: 12:22
 */

$start_time = strtotime('2016-12');
$last_time = strtotime(date('Y-m',($start_time-86400)));

echo date('Y-m-d H:i:s',$last_time);