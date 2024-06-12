<?php

namespace Database\Seeders;




use App\Models\User;
use App\Contracts\IRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\VarDumper\VarDumper;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin  =   User::create($this->_createSuperAdmin());
        $super_admin->assignRole(IRole::SUPER_ADMIN);
        VarDumper::dump("Role super admin create :: Super Admin");
    }


    private function _createSuperAdmin(): array
    {
        return [
            'name'    =>  'super admin',
            'email'   =>  'superadmin@finova.com',
            'password'   =>  Hash::make('root@123'),
        ];
    }
}
