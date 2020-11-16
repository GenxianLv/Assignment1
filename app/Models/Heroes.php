<?php

namespace App\Models;

use App\Models\Simple\CSVModel;

class Heroes extends CSVModel {

    protected $origin = WRITEPATH . 'data/Heroes.csv';
    protected $keyField = 'id';
    protected $validationRules = [];

}
