<?php

class Solicitacao {
    private $numeroPedido;
    private $idServico;
    private $idTipoServico;
    private $idUsuarioPrestador;
    private $idUsuarioTomador;
    private $condicao;
    private $dataServico;
    private $dataServicoConclusao;
    private $observacao;
    private $horario;

    public function __construct($idServico, $idTipoServico, $idUsuarioPrestador, $idUsuarioTomador,
    $condicao, $dataServico, $horario) {
        $this->idServico = $idServico;
        $this->idTipoServico = $idTipoServico;
        $this->idUsuarioPrestador = $idUsuarioPrestador;
        $this->idUsuarioTomador = $idUsuarioTomador;
        $this->condicao = $condicao;
        $this->dataServico = $dataServico;
        $this->horario = $horario;
    }

    public function getIdServico(){
        return $this->idServico;
    }

    public function getIdTipoServico(){
        return $this->idTipoServico;
    }

    public function getIdUsuarioPrestador(){
        return $this->idUsuarioPrestador;
    }

    public function getIdUsuarioTomador(){
        return $this->idUsuarioTomador;
    }

    public function getCondicao(){
        return $this->condicao;
    }

    public function getDataServico(){
        return $this->dataServico;
    }

    public function getDataServicoConclusao(){
        return $this->dataServicoConclusao;
    }

    public function getObservacao(){
        return $this->observacao;
    }

    public function getHorario(){
        return $this->horario;
    }
}