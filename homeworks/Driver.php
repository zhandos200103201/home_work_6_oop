<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/homeworks/Person.php';


class Driver extends Person
{
    private $_experience;

    public function __construct($_name, $_experience)
    {
        parent::__construct($_name);
        $this->_experience = $_experience;
    }

    public function __toString()
    {
        return $this->getFullName() . " has ". $this->getExperience() . " years of driving experience!";
    }

    public function getExperience(){
        return $this->_experience;
    }

}
