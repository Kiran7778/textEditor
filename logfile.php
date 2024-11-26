<?php
function logMessage($message) {
    $logFile = 'activity_log.txt';
    $time = date('Y-m-d H:i:s');
    $logEntry = "[$time] $message" . PHP_EOL;
    file_put_contents($logFile, $logEntry, FILE_APPEND);
}
?>
