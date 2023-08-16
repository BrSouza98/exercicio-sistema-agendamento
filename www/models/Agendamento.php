<?php

class Agendamento{
    public DateTime $data;
    private int $IDpaciente;
    private int $IDpodologa;

    public function __construct(DateTime $d, Paciente $ipc, Podologa $ipd){
        $this->data = $d;
        $this->IDpaciente = $ipc->id;
        $this->IDpodologa = $ipd->id;
    }
}