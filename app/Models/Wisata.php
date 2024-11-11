<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Wisata extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    public $timestamps = false;

    /** 
     * The attributes that are mass asignable.
     * 
     * @var array
    */
    protected $fillable = [
        'kota', 'landmark', 'tarif'
    ];

    /**
     * The attributes excluded from the models JSON form.
     * 
     * @var array
     */
    protected $hidden = [];
}

?>