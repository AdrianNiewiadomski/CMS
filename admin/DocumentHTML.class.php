<?php

    include 'ElementHTML.class.php';

    class Document{
        //$elementy = [];

        public function __construct($elementy){
            $this->elementy = $elementy;
        }

        function zbudujDokument($nr){

            $tresc = $this->elementy[$nr]->get_typ_elementu();

            return $tresc;
        }
    }

 ?>
