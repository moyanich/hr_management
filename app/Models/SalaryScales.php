<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryScales extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'salary_scales';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'series',
        'group',
        'scale1',
        'scale2',
        'scale3',
        'scale4',
        'scale5',
        'scale6',
        'scale7',
        'scale8',
    ];

}
