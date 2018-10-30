<?php

Class Automovel
{
    private $velocidade;
    private $potencia;
    private $ligado;

    public function __construct($estaLigado = false)
    {
        $this->setLigado($estaLigado);
    }

    public function getLigado() 
    {
        return $this->ligado;
    }

    public function setLigado($estaLigado) 
    {
        $this->ligado = $estaLigado;
    }

    public function setVelocidade($valorVelocidade) 
    {
        $this->velocidade = $valorVelocidade;
    }

    public function getVelocidade() 
    {
        return $this->velocidade;
    }

    public function setPotencia($valorPotencia) 
    {
        $this->velocidade = $valorPotencia;
    }

    public function getPotencia() 
    {
        return $this->potencia;
    }

    public function acelerar() 
    {
        if($this->ligado == true)
        {
            $this->velocidade *= 10;
        }
    }

    public function frear()
    {
        $this->velocidade = $this->velocidade / 10 * 9;
    }

}

Class Aviao extends Automovel
{
    
    private $tempoVooTanqueCheio;

}

Class Barco extends Automovel
{
    private $alturaDoMastro;

    public function setAlturaDoMastro($tamanhoDoMastro)
    {
        $this->$alturaDoMastro = $tamanhoDoMastro;
    }

    public function getAlturaDoMastro($tamanhoDoMastro)
    {
        return $this->$alturaDoMastro;
    }

}

Class Fusca extends Automovel
{
    private $combustivel;

}


$teste = new Automovel(true);
$teste->setVelocidade(100);
$teste->acelerar();
echo 'Acelerando = '.$teste->getVelocidade().'Km/h <br/>';
$teste->frear();
echo 'Freando = '.$teste->getVelocidade().'Km/h';