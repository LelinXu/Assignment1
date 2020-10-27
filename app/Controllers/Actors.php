<?php namespace App\Controllers; 
  class Actors extends \CodeIgniter\Controller
  {
      public function index() 
      {
           $actors = new \App\Models\Actors(); 
           $records = $actors->findAll(); 
           return json_encode($records); 
      }
  }