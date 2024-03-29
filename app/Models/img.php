<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    use HasFactory;
    protected $table = 'imgs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'path', 'admin_id', 'status', 'created_at', 'updated_at'    
    ];

    public function  scopeSelection($query){
        return $query -> select(
            'id', 'name', 'path', 'admin_id', 'status', 'created_at', 'updated_at'    
        );
    }

    public function scopeActive($query){
        return $query -> where('status',0);
    }

    public function getActive(){
        return $this -> status == 0 ? 'مفعل'  : 'غير مفعل';
    }

}
