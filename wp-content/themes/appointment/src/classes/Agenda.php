<?php
    namespace Osjc\classes;

    class Agenda{
        public $dia;
        public $mes;
        public $mesSemana;
        private $agendamento;
        
        public function __construct($dia,$mes){
            $this->dia = $dia;
            $this->mes = $mes;
        }
        
        protected function getMesSemana(){
            return $this->mesSemana;
        }
        protected function setMesSemana($mes){
            $this->mesSemana = $mes;
        }
        
        public function Mes(){
                $nomeMes = $this->mes;
            if($nomeMes == '01'){
                
                $this->setMesSemana('JANEIRO');
                
            }elseif($nomeMes == '02'){
                
                $this->setMesSemana('FEVEREIRO');
                
            }elseif($nomeMes == '03'){
                
               $this->setMesSemana('MARÇO');
                
            }elseif($nomeMes == '04'){
                
                $this->setMesSemana('ABRIL');
                
            }elseif($nomeMes == '05'){
                
                $this->setMesSemana('MAIO');
                
            }elseif($nomeMes == '06'){
                
                $this->setMesSemana('JUNHO');
                
            }elseif($nomeMes == '07'){
                
                $this->setMesSemana('JULHO');
                
            }elseif($nomeMes == '08'){
                
                $this->setMesSemana('AGOSTO');
                
            }elseif($nomeMes == '09'){
                
                $this->setMesSemana('SETEMBRO');
                
            }elseif($nomeMes == '10'){
                
                $this->setMesSemana('OUTUBRO');
                
            }elseif($nomeMes == '11'){
                
                $this->setMesSemana('NOVEMBRO');
                
            }else{
                
                $this->setMesSemana('DESEMBRO');
            } 
            
            echo $this->getMesSemana();
        }
        
        public function Agendamento(){
            
            switch($this->mes){
                case '06':
                    echo"   <p>Festa Junina, <b>Sede OSJC</b></p>
                            <p>Reunião de avaliação da festa junina, <b>Sede OSJC</b></p>
                        ";
                    break;    
            }
        }
        
        // class Agenda fim
    }
?>