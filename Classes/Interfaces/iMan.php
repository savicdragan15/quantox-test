<?php
/**
 * Created by PhpStorm.
 * User: savicdragan15
 * Date: 3.3.18.
 * Time: 12.48
 */

interface iMan
{
    /**
     * @return mixed
     */
    public function speak();

    /**
     * @return mixed
     */
    public function stopSpeak();

    /**
     * @return mixed
     */
    public function walk();

    /**
     * @return mixed
     */
    public function sitDown();

    /**
     * @return mixed
     */
    public function standUp();

}