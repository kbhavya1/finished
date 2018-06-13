<?php

namespace App\Globals;

class Constant{

   static function getSubject(){
    return (object) array(
      'MATHS'=>'M',
      'PHYSICS'=>'P',
      'CHEMISTRY'=>'C'
    );
   }

   const EXAMPLE =  1;

}
