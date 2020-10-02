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
}
