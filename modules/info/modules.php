<?php

if (!defined('DEBUG_MODE')) { die(); }

class Hm_Output_dev_content extends Hm_Output_Module {
    protected function output($input, $format) {
        return '<div class="dev_content"><div class="content_title">Make it your own</div></div>';
    }
}

class Hm_Output_bug_report_form extends Hm_Output_Module {
    protected function output($input, $format) {
        return '<div class="bug_report"><div class="content_title">Is much broken</div></div>';
    }
}

class Hm_Output_help_content extends Hm_Output_Module {
    protected function output($input, $format) {
        return '<div class="help_content"><div class="content_title">Let me explain</div></div>';
    }
}

class Hm_Output_developer_doc_link extends Hm_Output_Module {
    protected function output($input, $format) {
        $res = '<li class="menu_dev"><a class="unread_link" href="?page=dev">'.
            '<img class="account_icon" src="'.$this->html_safe(Hm_Image_Sources::$code).'" alt="" width="16" height="16" /> '.$this->trans('Dev').'</a></li>';
        if ($format == 'HTML5') {
            return $res;
        }
        $input['formatted_folder_list'] .= $res;
        return $input;
    }
}

class Hm_Output_bug_report_link extends Hm_Output_Module {
    protected function output($input, $format) {
        $res = '<li class="menu_bug_report"><a class="unread_link" href="?page=bug_report">'.
            '<img class="account_icon" src="'.$this->html_safe(Hm_Image_Sources::$bug).'" alt="" width="16" height="16" /> '.$this->trans('FAIL').'</a></li>';
        if ($format == 'HTML5') {
            return $res;
        }
        $input['formatted_folder_list'] .= $res;
        return $input;
    }
}

class Hm_Output_help_page_link extends Hm_Output_Module {
    protected function output($input, $format) {
        $res = '<li class="menu_help"><a class="unread_link" href="?page=help">'.
            '<img class="account_icon" src="'.$this->html_safe(Hm_Image_Sources::$info).'" alt="" width="16" height="16" /> '.$this->trans('Help').'</a></li>';
        if ($format == 'HTML5') {
            return $res;
        }
        $input['formatted_folder_list'] .= $res;
        return $input;
    }
}


?>