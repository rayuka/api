<?php

class Response
{
    public $status = false;
    public $result = array();


    public function __construct($status = false, $result = array())
    {
        $this->status = $status;
        $this->result = $result;
    }

    public function print()
    {
        echo json_encode($this);
    }

    public static function print_error()
    {
        echo '{"query_result":"FAILURE"}';
    }

    public static function print_success()
    {
        echo '{"query_result":"SUCCESS"}';
    }
}
