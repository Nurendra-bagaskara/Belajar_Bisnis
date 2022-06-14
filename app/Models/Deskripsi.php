<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deskripsi extends Model
{
    use HasFactory;


    public function scopeFilter($query){
        if(request('Search')){
            return $query->where('title', 'like', '%' . request('Search'). '%');
                        // ->orWhere('body', 'like', '%'. request('Serach'). '%');
        } 
    } 

    // fillable artinya ketika dijalankan, variable yang ada di dalam kurung array boleh diisi sedangkan sisanya tidak boleh diisi
    protected $fillable = ['title','category_id','slug','excerpt','body'];
    //untuk guarded yang ada didalam kurung array tidak boleh diisi yang sisanya boleh diisi
    // protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
