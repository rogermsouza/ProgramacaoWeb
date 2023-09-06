<?php
    class Data{
        private $dia;
        private $mes;
        private $ano;

        public function __construct($dia = 0, $mes = 0, $ano = 0)
        {
            $this->dia = sprintf("%02s", $dia);
            $this->mes = sprintf("%02s", $mes);
            $this->ano = $ano;
        }

        public function getDia(){
            return $this->dia;
        }
        public function setDia($dia){
            $this->dia = $dia;
        }
        public function maisDia($d){
            $this->dia += $d;
        }

        public function menosDia($d){
            $this->dia -= $d;
        }

        public function getMes(){
            return $this->mes;
        }
        public function setMes($mes){
            $this->mes = $mes;
        }

        public function getAno(){
            return $this->ano;
        }
        public function setAno($ano){ 
            $this->ano = $ano;
        }

        public function dataCompleta(){
            echo "Data: " .$this->dia ."/" .$this->mes  ."/" .$this->ano;
        }

        public function biSexto($ano){
            
        }
    }

$minhaData = new Data(01,06,2023);
echo $minhaData->dataCompleta();
if ((($minhaData->getAno() % 4 == 0 and $minhaData->getAno() % 100 != 0)) || ($minhaData->getAno() % 400 == 0))
{
    echo "<br>Bisexto";
}else {
    echo "<br>Não Bisexto";
}
?>