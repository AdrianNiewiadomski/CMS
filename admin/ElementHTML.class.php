<?php

    class Element {
        private $nr;
        private $rodzic;
        private $dzieci;
        private $typ_elementu;
        private $atrybut1;
        private $atrybut2;
        private $atrybut3;
        private $atrybut4;
        private $zawartosc;

        public function __construct($rekord){
            $this->nr           = $rekord['nr'];
            $this->rodzic       = $rekord['rodzic'];
            $this->dzieci      = $rekord['dzieci'];
            $this->typ_elementu = $rekord['typ_elementu'];
            $this->atrybut1     = $rekord['atrybut1'];
            $this->atrybut2     = $rekord['atrybut2'];
            $this->atrybut3     = $rekord['atrybut3'];
            $this->atrybut4     = $rekord['atrybut4'];
            $this->zawartosc    = $rekord['zawartosc'];
        }

        public function get_nr() {
            return $this->nr;
        }

        public function get_rodzic() {
            return $this->rodzic;
        }

        public function get_dzieci() {
            return $this->dzieci;
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
