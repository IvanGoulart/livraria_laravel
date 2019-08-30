<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['name','editora_id','autor_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'produtos';

    public function autor(){
        return $this->belongsTo('App\Autor');
    }
    public function editora(){
        return $this->belongsTo('App\Editora');
    }
}
