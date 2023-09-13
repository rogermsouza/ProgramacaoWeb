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
    
    class voo {
        private $passageiros;
        private $num_voo;
        private $data;
        public function __construct($passageiros){
            $this->passageiros = 100;
            $this->num_voo = $num_voo;
            $this->data = $data;
        }
    }


?>