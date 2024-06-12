<?php

namespace App\Models;

use Spatie\Permission\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Contracts\Permission as PermissionContract;

class Permission extends \Spatie\Permission\Models\Permission
{
    use HasFactory;

    public static function findOrCreate(string $name, $guardName = null, $parent_id = null): PermissionContract
    {
        $guardName = $guardName ?? Guard::getDefaultName(static::class);
        $permission = static::getPermission(['name' => $name, 'guard_name' => $guardName, 'module_id' => $parent_id]);

        if (!$permission) {
            return static::query()->create(['name' => $name, 'guard_name' => $guardName, 'module_id' => $parent_id]);
        }

        return $permission;
    }
    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }
}
