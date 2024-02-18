<?php


class Filtres{

    private $data;

public function filtres($data)
{
    $this->data = strip_tags($data);
    $this->data = trim($this->data);
    $this->data = stripslashes($this->data);
    $this->data = htmlspecialchars($this->data);
    return $this->data;
}


}
