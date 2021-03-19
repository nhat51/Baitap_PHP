<?php
    Class Student{
        private $studentId;
        private $StudentName;

        public function __construct($Id,$Name)
        {
            $this->studentId = $Id;
            $this->StudentName = $Name;
        }

        public function getStudentId()
        {
            return $this->studentId;
        }

        public function setStudentId($studentId)
        {
            $this->studentId = $studentId;
        }

        public function getStudentName()
        {
            return $this->StudentName;
        }

        public function setStudentName($StudentName)
        {
            $this->StudentName = $StudentName;
        }
    }
