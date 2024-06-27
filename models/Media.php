<?php


class Media 
{

  private ? int $id = null;

  public function __construct(private string $url, private string $alt)
    {

    }

  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }
  public function getUrl()
  {
    return $this->url;
  }

  public function setUrl($url)
  {
    $this->url = $url;

    return $this;
  }

  public function getAlt()
  {
    return $this->alt;
  }

  public function setAlt($alt)
  {
    $this->alt = $alt;

    return $this;
  }
}