<?php
namespace \tool_sentry\output;

defined('MOODLE_INTERNAL') || die();

class test_buttons implements \renderable, \templatable {
    public function export_for_template(\renderer_base $output) {
        global $CFG;
        return [
            'wwwroot' => $CFG->wwwroot,
        ];
    }
}
