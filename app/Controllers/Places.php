<?php
namespace App\Controllers;

class Places extends \CodeIgniter\Controller
{
    public function index()
    {
       // connect to the model
       $places = new \App\Models\Heroes();
       // retrieve all the records
       $records = $places->findAll();
       // JSON encode and return the result
       return json_encode($records);
    }
}
