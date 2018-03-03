<?php
/**
 * Created by PhpStorm.
 * User: savicdragan15
 * Date: 4.3.18.
 * Time: 00.09
 */

class Woman extends HumanBase implements iWoman
{
    /**
     * @var bool
     */
    private $isMarried = null;

    /**
     * Man constructor.
     * @param null $name Name
     * @param null $gender Gender
     * @param null $year Years
     */
    public function __construct($name = null, $gender = null, $year = null)
    {
        parent::__construct($name, $gender, $year);
    }

    /**
     * @return mixed|void
     */
    public function speak()
    {
        return $this->name .' is now speaking.';
    }

    /**
     * @return mixed|void
     */
    public function stopSpeak()
    {
        return $this->name .' not talking now.';
    }

    /**
     * Get name
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get gender
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Get years
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Walking method
     * @return string
     */
    public function walk()
    {
        return $this->name .' is now walking.';
    }

    /**
     * Sit down method
     * @return string
     */
    public function sitDown()
    {
        return $this->name . ' is now sit down.';
    }

    /**
     * Stand up method
     * @return string
     */
    public function standUp()
    {
        return $this->name . ' was stand up.';
    }

    /**
     * @param $isMarried
     */
    public function setIsMarried($isMarried)
    {
        $this->isMarried = $isMarried;
    }

    /**
     * @return bool
     */
    public function getIsMarried()
    {
        return $this->isMarried;
    }
}