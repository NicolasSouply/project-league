<?php

class PlayerController extends AbstractController 
{
  private PlayerManager $pm;
  public function __construct() 
  {
    $this->pm = new PlayerManager();
  }
  public function showAllPlayers(): void 
  {
    $players = $this->pm->getAllPlayers(); 

    $template = "players";
    require "./templates/layout.phtml";
  }
}