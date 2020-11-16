<?php

namespace App\Controllers;

class Heroes extends BaseController {

    public function index() {
        // connect to the model
        $places = new \App\Models\Heroes();
        // retrieve all the records
        $records = $places->findAll();
        $table = new \CodeIgniter\View\Table();

        $headings = $places->fields;

        /* $displayHeadings = array_slice($headings, 1, 3);
          $table->setHeading(array_map('ucfirst', $displayHeadings)); */
        $table->setHeading(array('Name', 'Image', 'Link'));

        foreach ($records as $record) {
            /*  $nameLink = anchor("heroes/showme/$record->id", $record->name); */
            $table->addRow(
                    $record->name,
                    /*  $record->image, */
                    '<img src="/image/' . $record->image . '">',
                    anchor("heroes/showme/$record->id", $record->star)
            );
        }

        $template = [
            'table_open' => '<table cellpadding="10px">',
            'cell_start' => '<td style="border: 1px solid blue;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        $table->setTemplate($template);
        $fields = [
            'title' => 'Super Heroes',
            'heading' => 'Super Heroes',
            'footer' => 'GenxianLv'
        ];

        // get a template parser
        $parser = \Config\Services::parser();
        // tell it about the substitions
        /* return $parser->setData(['records' => $records])
          // and have it render the template with those
          ->render('placeslist'); */
        return $parser->setData($fields)
                        ->render('templates\top') .
                $table->generate() .
                        $parser->setData($fields)
                        ->render('templates\bottom');
    }

    public function showme($id) {
        // connect to the model
        $places = new \App\Models\Heroes();
        // retrieve all the records
        $record = $places->find($id);
        // get a template parser
        $parser = \Config\Services::parser();
        $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $table->addRow($headings[0], $record['id'])
                ->addRow($headings[1], $record['name'])
                ->addRow($headings[2], $record['country'])
                ->addRow($headings[3], "<img src=\"/image/" . $record['image'] . "\"/>")
                ->addRow($headings[4], $record['hobby'])
                ->addRow($headings[5], $record['favorite food'])
                ->addRow($headings[6], $record['team'])
                ->addRow($headings[7], $record['star']);
        $template = [
            'table_open' => '<table cellpadding="10px">',
            'cell_start' => '<td style="border: 1px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        $table->setTemplate($template);

        $fields = [
            'title' => 'Super Heroes',
            'heading' => 'Super Heroes',
            'footer' => 'GenxianLv'
        ];
        // tell it about the substitions
        /* return $parser->setData($record)
          // and have it render the template with those
          ->render('oneplace'); */
        return $parser->setData($fields)
                        ->render('templates\top') .
                $table->generate() .
                        $parser->setData($fields)
                        ->render('templates\bottom');
    }

}
