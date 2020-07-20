<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    protected $table = 'information';
    protected $fillable = ['country', 'cases', 'todayCases', 'deaths',
    'todayDeaths', 'recovered',  'active', 'critical', 'casesPerOneMillion',
    'deathsPerOneMillion', 'totalTests', 'testsPerOneMillion'
];
}


