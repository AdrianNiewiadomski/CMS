<?php

    class Element {
        private $nr;
        private $rodzic;
        private $typ_elementu;
        private $atrybut1;
        private $atrybut2;
        private $atrybut3;
        private $atrybut4;
        private $zawartosc;

        public function __construct($wiersz){
            $this->nr           = $wiersz['nr'];
            $this->rodzic       = $wiersz['rodzic'];
            $this->typ_elementu = $wiersz['typ_elementu'];
            $this->atrybut1     = $wiersz['atrybut1'];
            $this->atrybut2     = $wiersz['atrybut2'];
            $this->atrybut3     = $wiersz['atrybut3'];
            $this->atrybut4     = $wiersz['atrybut4'];
            $this->zawartosc    = $wiersz['zawartosc'];
        }

        public function get_nr() {
            return $this->nr;
        }

        public function get_rodzic() {
            return $this->rodzic;
        }

        public function get_typ_elementu() {
            return $this->typ_elementu;
        }

        public function get_atrybut1() {
            return $this->atrybut1;
        }

        public function get_atrybut2() {
            return $this->atrybut2;
        }

        public function get_atrybut3() {
            return $this->atrybut3;
        }

        public function get_atrybut4() {
            return $this->atrybut4;
        }

        public function get_zawartosc() {
            return $this->zawartosc;
        }
    }

?>
