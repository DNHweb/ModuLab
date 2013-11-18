<?php

class                       TimeTable
{
    
    public                  $name = 'Timetable';
    public                  $version = '1.0alpla2';
    public                  $description = 'Gerer les emploi du temps des &eacute;tudiants et professeurs.';
    
    public function         toString()
    {
        return ('Le module ' . $this->name . ' est en version ' . $this->version . ', une petite description du module : ' . $this->description);
    }
    
}