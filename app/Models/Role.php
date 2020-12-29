<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   //es desde aqui
    protected $fillable = [
        'Name',
        'Slug',
        'Description',
        'FullAccess',
    ];

    public function Users()
    {
    	return $this->belongToMany('app\Users')->withTimesTamps();
    }

}
