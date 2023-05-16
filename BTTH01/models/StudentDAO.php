<?php
    require_once "Studentmodel.php";
    class StudentDAO{
        private $students=array();
        public function create(Student $student){
            array_push($this-> students,$student);
        }
        public function read($id){
            foreach ($this->students as $key=>$value)
            {
                if($student->getID()==$id){
                    return $student;
                }
            }
            return null;
        }
        public function update($student){
            foreach($this-> students as $key=>$value){
                if($value->getID()==$student->getID()){
                    $this->students[$key]==$student;
                    break;
                }
            }
        }
        public function delete($student){
            foreach($this->student as $key=>$value){
                if($value->getID()==$student->getID()){
                    unset($this->students[$key]);
                }
            }
        }
        public function getAll(){
            return $this->students;
        }
    }

?>