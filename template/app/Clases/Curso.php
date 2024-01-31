<?php

class Course
{
    private $id;
    private $initials;
    private $name;
    private $initialsCourse;

    private static $numberCourses = 0;

    public function __construct($id, $initials, $name, $initialsCourse)
    {
        $this->id = $id;
        $this->initials = $initials;
        $this->name = $name;
        $this->initialsCourse = $initialsCourse;
        self::$numberCourses++;
    }

    public function __toString()
    {
        $string =  $this->initials . '<br>';
        $string .= $this->name . '<br>';
        $string .= "Number of Cousers: " . Course::$numberCourses . '<br>' . '<br>';

        return $string;
    }


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of initials
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * Set the value of initials
     */
    public function setInitials($initials): self
    {
        $this->initials = $initials;

        return $this;
    }

    /**
     * Get the value of initialsCourse
     */
    public function getInitialsCourse()
    {
        return $this->initialsCourse;
    }

    /**
     * Set the value of initialsCourse
     */
    public function setInitialsCourse($initialsCourse): self
    {
        $this->initialsCourse = $initialsCourse;

        return $this;
    }
}
