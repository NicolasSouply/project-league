
<?php

class AbstractController
{
  private AbstractManager $am;
    public function __construct()
    {
       $this->am = new AbstractManager();
    }
    
    public function home() : void
    {
      $template = "home";
      require "templates/layout.phtml";
      
    }
    public function notFound(): void 
    {
    $template = "404";
    require "templates/layout.phtml";
    }

 
}