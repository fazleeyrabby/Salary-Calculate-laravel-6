<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table="salary";
    protected $primaryKey="id";
    protected $fillable=[
        'hr_per_day',
        'salary',
        'gov_holiday',
        'provident_fund',
    ];
}
