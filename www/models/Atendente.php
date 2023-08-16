<?php

class Atendente extends Usuario{
    public function agendar(Paciente $paciente, Podologa $podologa, DateTime $data) : Agendamento{
        return new Agendamento($data, $paciente, $podologa);
    }
}