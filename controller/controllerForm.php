<?php
class Form{
    static function emptyPostField(): bool {
        foreach ($_POST as $value) {
            if (empty($value)) {
                return true;
            }
        }
        return false;
    }
}

Form::emptyPostField();


/* $hasEmpty = false;
foreach ($_POST as $value) {
        if (empty($value)) {
               $hasEmpty = true;
               break;
        }
    } */
# Vérifie s'il y a un champ vide
   
                
            
        
    

