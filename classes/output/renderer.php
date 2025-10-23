<?php

namespace tool_sentry\output;

defined('MOODLE_INTERNAL') || die();

class renderer extends \plugin_renderer_base
{
    public function render_test_buttons()
    {
        $data = [
            'wwwroot' => $this->page->url->out(false)
        ];
        return $this->render_from_template('admin/tool/sentry/templates/test_buttons', $data);
    }
}
