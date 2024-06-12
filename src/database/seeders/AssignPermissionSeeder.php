<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Symfony\Component\VarDumper\VarDumper;

class AssignPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = config('role-permissions');
        // dd($config);
        $roles = $config['roles-set'];
        // dd($roles);
        foreach ($roles as $role => $value) {
            VarDumper::dump("Adding Role $value :: $role");
            $role = Role::findOrCreate($role, 'web');
            // dd($role);
            $modules = $config['module-permissions-set'][$role->name] ?? null;
            if ($modules) {
                //   dd('here');
                $this->_assignPermissions($modules, $role);
            }
        }
    }

    private function _assignPermissions($permissionModule, $role)
    {
        $status = "";
        if (is_array($permissionModule)) {
            foreach ($permissionModule as $key => $permission) {
                if (!(is_array($permission))) {
                    $status = $role->givePermissionTo($permission);;
                    // dd('here in first one');
                    VarDumper::dump('Permission ' . $permission . ' has been assigned  to ' . $role->name);
                } else {
                    if ($this->_isArrayHasModules($permission)) {
                        $status = $this->_assignPermissions($permission, $role);
                        // dd('here in second one');
                    } else {
                        foreach ($permission as $value => $module_permission) {
                            // dd($module_permission);

                            $status = $role->givePermissionTo($module_permission);;
                            // dd('here in third one');

                            VarDumper::dump('Permission ' . $module_permission . ' has been assigned  to ' . $role->name);
                        }
                    }
                }
            }
        } else {
            $status = $role->givePermissionTo($permissionModule);;
            // dd('here in fourth one');

            VarDumper::dump('Permission ' . $permissionModule . ' has been assigned  to ' . $role->name);
        }
        return $status;
    }

    private function _isArrayHasModules($array)
    {
        if (is_array($array)) {
            foreach ($array as $value) {
                if (is_array($value))
                    return true;
            }
            return false;
        }
    
        if (is_array($array)) {
            foreach ($array as $value) {
                if (is_array($value))
                    return true;
            }
            return false;
        }
    }
}
