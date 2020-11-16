<?php
namespace App\Models;
use App\Models\Simple\JSONModel; 

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Actors extends JSONModel {
 protected $origin = WRITEPATH . 'data/actorsData.json'; 
 protected $keyField = 'id'; protected $validationRules = []; 

}

