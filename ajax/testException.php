<?php
require_once( '../../../../config.php');
require_once( '../classes/helper.php');
require_once( '../vendor/autoload.php');


header('Content-Type: text/plain');


try {
    tool_sentry\helper::init();
    throw new Exception('This is a test exception from Moodle Sentry plugin.');

} catch (Exception $e) {
    $data = Sentry\captureException($e);
    echo "✅ Test exception sent to Sentry.\n";
    echo "Message: " . $e->getMessage() . "\n";
    var_dump($data);
}
