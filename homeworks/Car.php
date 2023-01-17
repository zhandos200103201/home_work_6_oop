<?php
class Car
{
    private $_carClass;
    private $_engine;
    private $_driver;
    private $_the_mark;

    public function __construct($_class_of_car, $_engine, $_driver,$_mark)
    {
        $this->_carClass = $_class_of_car;
        $this->_engine = $_engine;
        $this->_driver = $_driver;
        $this->_the_mark = $_mark;
    }

    public function getCarClass()
    {
        return $this->_carClass;
    }

    /**
     * @param mixed $carClass
     */
    public function setCarClass($carClass)
    {
        $this->_carClass = $carClass;
    }
    public function getDriver()
    {
        return $this->_driver;
    }

    /**
     * @param mixed $driver
     */
    public function setDriver($driver)
    {
        $this->_driver = $driver;
    }
    public function getTheMark()
    {
        return $this->_the_mark;
    }

    /**
     * @param mixed $the_mark
     */
    public function setTheMark($the_mark)
    {
        $this->_the_mark = $the_mark;
    }
    public function getEngine()
    {
        return $this->_engine;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine)
    {
        $this->_engine = $engine;
    }
    public function start()
    {
        echo "Move";
    }
    public function stop()
    {
        echo "Stop";
    }
    public function turnRight()
    {
        echo "Turn right";
    }
    public function turnLeft()
    {
        echo "turn left";
    }
    public function __toString()
    {
        return $this->getDriver(). "<br>" . $this->getEngine(). "<br>". "Class of car is:' ".$this->getCarClass()."'<br>"."The mark is ".$this->getTheMark();
    }
}