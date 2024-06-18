<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Ao adicionar a var table o laravel já reconhece automaticamente como uma tabela, meio parecido com as anotações Spring em java
    protected $table = 'product';
    protected $primaryKey = 'product_id';

    //Seguindo raciocínio anterior fillable é como se fosse uma lista de atributos
    protected $fillable = [
        'product_name',
        'product_price',
        'product_quantity',
        'product_description'
        
    ];
    use HasFactory;
}
