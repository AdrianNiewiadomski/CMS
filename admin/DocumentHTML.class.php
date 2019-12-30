<?php

    include 'ElementHTML.class.php';

    class Document{
        private $elementy;

        public function __construct($elementy){
            $this->elementy = $elementy;
        }

        function zbudujDokument($nr){
            $nr--;
            $tresc = "";
            switch ($this->elementy[$nr]->get_typ_elementu()) {
                case 'dokument HTML':
                    $tresc = "<body>";
                    break;
                case 'nagłówek 1':
                    $tresc = "<h1>";
                    break;
                case 'paragraf':
                    $tresc = "<p>";
                    break;
            }
            $tresc .= $this->elementy[$nr]->get_zawartosc();

            if($this->elementy[$nr]->get_dzieci() != ""){
                $dzieci = explode(" " ,$this->elementy[$nr]->get_dzieci());
                foreach($dzieci as $dziecko){
                    //echo $dziecko;
                    $tresc .= $this->zbudujDokument($dziecko);
                }
            }


            switch ($this->elementy[$nr]->get_typ_elementu()) {
                case 'dokument HTML':
                    $tresc .= "</body>";
                    break;
                case 'nagłówek 1':
                    $tresc .= "</h1>";
                    break;
                case 'paragraf':
                    $tresc .= "</p>";
                    break;
            }
            return $tresc;
        }
    }

 ?>
