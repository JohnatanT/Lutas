<?php

require_once 'Lutador.php';
class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    public function marcarLuta($l1,$l2){
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
        
        
    }
    public function lutar(){
        if($this->gettAprovada(true)){
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    echo "Emapte</br>";
                    $this->setDesafiado($this->empatarLuta());
                    $this->setDesafiado($this->empatarLuta());
                    break;
                case 1:
                    echo $this->getDesafiado($this->getNome());
                    $this->setDesafiado($this->ganharLuta());
                    $this->setDesafiante($this->perderLuta());
                    break;
                case 2:
                    echo $this->getDesafiante($this->getNome());
                    $this->setDesafiante($this->ganharLuta());
                    $this->setesafiado($this->perderLuta());
                    break;
            }
        }else{
            echo "Luta não pode acontecer!</br>";
        }
    }
    
    
    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }


    
    
}
