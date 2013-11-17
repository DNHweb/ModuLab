<?php

class                       Agenda
{
    
    public                  $name = 'Agenda';
    public                  $version = '1.0.0';
    public                  $description = 'Gerer les agendas de votre &eacute;tablissement en un simple clique.';
    
    public function         toString()
    {
        echo 'Le module ' . $this->name . ' est en version ' . $this->version . ', une petite description du module : ' . $this->description;
        echo '<br>';
    }
    
}