<?php

namespace MrArsal4u\StripeSpice\Models;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function subModules()
    {
        return $this->hasMany(Module::class, 'parent_id', 'id');
    }
    public function parentModule()
    {
        return $this->belongsTo(Module::class, 'parent_id', 'id');
    }
}
