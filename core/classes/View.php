<?php

class View
{
    public $dataForView;

    function render($name)
    {
        require_once VIEWS . '/' . $name . ".php";
    }
}