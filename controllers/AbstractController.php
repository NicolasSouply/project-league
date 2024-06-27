
<?php

abstract class AbstractController
{
  

    public function __construct(string $file, protected string $currentLang = "fr")
    {
       
    }
    
    protected function render(string $template, array $data) : void
    {
        require "templates/layout.phtml";
    }
}