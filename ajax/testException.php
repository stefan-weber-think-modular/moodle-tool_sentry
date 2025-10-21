<?php

require_once( '../vendor/autoload.php');

use Sentry\SentrySdk;
use Sentry\ClientBuilder;

header('Content-Type: text/plain');

try {
    \Sentry\init(['dsn' => get_config('tool_sentry', 'dsn')]);
    Sentry\captureMessage('Sentry test message from Moodle.');

    throw new Exception('This is a test exception from Moodle Sentry plugin.');

} catch (Exception $e) {
    Sentry\captureException($e);
    echo "✅ Test exception sent to Sentry.\n";
    echo "Message: " . $e->getMessage() . "\n";
}
