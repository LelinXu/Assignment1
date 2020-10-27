<?php     namespace App\Controllers; 

class KoreanVarietyShow extends BaseController { 
      public function index() {
           $actors = new \App\Models\Actors(); 
           $records = $actors->findAll(); 
           $parser = \Config\Services::parser(); 
           return $parser->setData(['records' => $records]) ->render('actorlist'); 
      }
      public function showme($id) {
          $actors = new \App\Models\Actors(); 
          $record = $actors->find($id); 
          $parser = \Config\Services::parser();
          return $parser->setData($record)->render('oneactor');
      }
}