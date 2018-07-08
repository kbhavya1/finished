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

    const ACCESSLEVEL_ADMIN = 7;
    const ACCESSLEVEL_COACHING = 5;
    const ACCESSLEVEL_SEEDER = 3;
    const ACCESSLEVEL_STUDENT = 1;

}
