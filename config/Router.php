<?php

class Router
{
    private PlayerController $pc;
    private TeamController $tc;
    
    

    public function __construct()
    {
        $this->pc = new PlayerController();

    }

    public function handleRequest(array $get) : void
    {
        if (isset($get['route']) && ($get['route'] === 'home'))
        {
            $this->pc->home();
        }
        


        elseif(!isset($get["route"]))
        {
            $this->ac->home();
        }
        else
        {
            $this->ac->notFound();
        } 
    }
}