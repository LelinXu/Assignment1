<?php     namespace App\Controllers; 

class KoreanVarietyShow extends BaseController { 
      public function index() {
           $actors = new \App\Models\Actors(); 
           $records = $actors->findAll(); 
           $parser = \Config\Services::parser(); 
           
           //newadd
           $table = new \CodeIgniter\View\Table();
           $headings = $actors->fields;
           $table->setHeading($headings[1],$headings[7],"details");
           foreach ($records as $record) 
            {
               
               $nameLink = anchor("KoreanVarietyShow/showme/$record->id"," details");
               $table->addRow($record->name,"<img src=\"/image/".$record->image."\"/>",$nameLink);
            }
             $template = 
                [
                   'table_open' => '<table cellpadding="5px">',
                   'cell_start' => '<td style="border: 1px solid #dddddd;">',
                   'row_alt_start' => '<tr style="background-color:#dddddd">',
                ];
             $table->setTemplate($template);
             $fields = 
                [
                   'title' => 'Korean Variety Show Destinations',
                   'heading' => 'Korean Variety Show Destinations',
                   'footer' => 'Copyright lelinXu'
                ];
             return $parser->setData($fields)
                              ->render('templates\top').
                        $table->generate().
             $parser->setData($fields)->render('templates\bottom');
             
      }
        
      public function showme($id) {
          $actors = new \App\Models\Actors(); 
          $record = $actors->find($id); 
          $parser = \Config\Services::parser();
          
          //newadd
           $table = new \CodeIgniter\View\Table();
           $headings = $actors->fields;
           $table->addRow($headings[0],$record['id'])
                         ->addRow($headings[1],$record['name'])
                         ->addRow($headings[2],$record['age'])
                         ->addRow($headings[3],$record['city'])
                         ->addRow($headings[4],$record['positioning in the program'])
                         ->addRow($headings[5],$record['program description'])
                         ->addRow($headings[6],$record['personal introduction'])
                         ->addRow($headings[7], "<img src=\"/image/".$record['image']."\"/>");
          
            $template = 
                [
                   'table_open' => '<table cellpadding="5px">',
                   'cell_start' => '<td style="border: 1px solid #dddddd;">',
                   'row_alt_start' => '<tr style="background-color:#dddddd">',
                ];
             $table->setTemplate($template);
             $fields = 
                [
                   'title' => 'Korean Variety Show Destinations',
                   'heading' => 'Korean Variety Show Destinations',
                   'footer' => 'Copyright lelinXu'
                ];
             return $parser->setData($fields)
                              ->render('templates\top').
                        $table->generate().
             $parser->setData($fields)->render('templates\bottom');
      }
  
}