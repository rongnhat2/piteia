<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    use HasFactory;
    protected $table = 'customer_detail';
    protected $fillable = ['customer_id', 'name', 'name_kana', 'company', 'zipcode', 'phone', 'avatar', 'address', 'cart', 'created_at', 'updated_at'];
}
