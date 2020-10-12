<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class UnitManagement extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'unit_managements';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_SELECT = [
        'stay'    => 'Stay',
        'selling' => 'Selling',
        'rent'    => 'Rent',
        'empty'   => 'Empty',
    ];

    protected $fillable = [
        'unit_id',
        'owner_id',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function unit()
    {
        return $this->belongsTo(AddUnit::class, 'unit_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
