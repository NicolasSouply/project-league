<?php


class Game
{

  private ? int $id = null;

  public function __construct(private string $name, private DateTime $dateTime, private int $team_1, private int $team_2, private int $winner)
  {

  }

  public function getId(): ?int
  {
      return $this->id;
  }
  public function setId(?int $id): void
  {
      $this->id = $id;
  }

  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }
  
  public function getDateTime()
  {
    return $this->dateTime;
  }

  public function setDateTime($dateTime)
  {
    $this->dateTime = $dateTime;

    return $this;
  }

  public function getTeam_1()
  {
    return $this->team_1;
  }
  
  public function setTeam_1($team_1)
  {
    $this->team_1 = $team_1;

    return $this;
  }

  public function getTeam_2()
  {
    return $this->team_2;
  }
  
  public function setTeam_2($team_2)
  {
    $this->team_2 = $team_2;

    return $this;
  }

  public function getWinner()
  {
    return $this->winner;
  }

  public function setWinner($winner)
  {
    $this->winner = $winner;

    return $this;
  }
}
