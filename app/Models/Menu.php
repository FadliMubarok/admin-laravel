<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $fillable = [
        'label', 'url', 'type', 'ikon', 'order', 'parent_id'
    ];

    public function children() 
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id', 'id');
    }

    public static function sidebar() {
        $user = Auth::user();            
        $ability = $user->getAbilities();
        $menu = [];
        foreach($ability as $abi)
        {
            $menu[] = $abi->menu_id;
        }
        
        return Menu::whereIn('id', $menu)->orderBy('order')->get();        
    }    
}
