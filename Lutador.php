<?php


class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    
    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$en){
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($en);
    }
    
    
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setCategoria() {
        if($this->getPeso() < 52.5){
            $this->setCategoria("Invalido");
        }elseif($this->getPeso() <= 70.3){
            $this->setCategoria("Leve");
        }elseif($this->getPeso() <= 83.9){
            $this->setCategoria("Medio");
        }elseif($this->getPeso() <= 120.2){
            $this->setCategoria("Pesado");
        }else{
            $this->setCategoria("Invalido");
        }
        
        
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }


    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    public function apresentar(){
        echo "Nome: </br>".$this->getNome();
        echo "Nacionalidade: </br>".$this->getNacionalidade();
        echo "Idade: </br>".$this->getIdade();
        echo "Altura: </br>".$this->getAltura();
        echo "Pesando: </br>".$this->getPeso();
        echo "Ganhou: </br>".$this->getVitorias();
        echo "Perdeu: </br>".$this->getDerrotas();
        echo "Empatou: </br>".$this->getEmpates();
            
    }
    public function status(){
        echo $this->getNome();
        echo "É um ".$this->getCategoria();
        echo $this->getVitorias();
        echo $this->getDerrotas();
        echo $this->getEmpates();
    }
    
    
    
}
