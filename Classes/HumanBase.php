<?php
/**
 * Created by PhpStorm.
 * User: savicdragan15
 * Date: 3.3.18.
 * Time: 13.24
 */

abstract class HumanBase
{
    /**
     * Name
     * @var
     */
    protected $name;

    /**
     * Gender
     * @var
     */
    protected $gender;

    /**
     * Years
     * @var
     */
    protected $year;

    /**
     * Human constructor.
     * @param $name Name
     * @param $gender Gender
     * @param $year Years
     */
    public function __construct($name, $gender, $year)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->year = $year;
    }

    /**
     * This method for set name
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * This method for set gender
     * @param $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * This method for set years
     * @param $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }


}