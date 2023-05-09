<?php
class Student{
    $id;
    $name;
    $age;
    public function getId()
    {
        return $id;
    }
    public function getName()
    {
        return $name;
    }
    public function getAge()
    {
        return $age;
    }
    public function setId($id)
    {
        $this->$id = $id;
    }
    public function setName($name)
    {
        $this->$name = $name;
    }
    public function setAge($age)
    {
        $this->$age = $age;
    }
}