<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ScreeningsTable extends Table
{
  public function initialize(array $config) {
    
    $this->belongsTo('Films');
    $this->belongsTo('Locations');
    $this->belongsToMany('Viewers');
   
    $this->addBehavior('Timestamp');
    
  }
}