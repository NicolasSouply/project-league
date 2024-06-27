<?php

class Router
{
    private AbstractController $ac;
    

    public function __construct()
    {
        $this->ac = new AbstractController();

    }

    public function handleRequest(array $get) : void
    {
        if(!isset($get["route"]))
        {
            $this->ac->home();
        }
    }
}