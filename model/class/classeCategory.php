<?php

    class category{
        // 
        private $_names;
        private $_descriptions = 'non defini';
        private $_pictures = NULL;

        //
        public function __construct($_name, $_description, $_picture){
            $this->_names = $_name ;
            $this->_descriptions = $_description ;
            $this->_pictures = $_picture ;
        }

        //
        public function getAllName(){
            
        }

        //
        public function getNameById($_id){

        }
    }

    //
//  new category( 'food', 'de la nouriture', NULL );