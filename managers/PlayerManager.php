<?php

class PlayerManager extends AbstractManager 
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getAllPlayers() : array
  {
    $players = [];
    $query = $this->db->prepare("SELECT * FROM players");
    $query->execute();
    
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $item)
    {
    
      $player = new Player($item['nickname'], $item["bio"],$item["portrait"], $item["team"]);
      $player->setId($item["id"]);
      $players[] = $player;

    }
    return $players;
  }

}