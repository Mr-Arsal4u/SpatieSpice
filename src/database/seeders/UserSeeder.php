<?php
namespace MrArsal4u\StripeSpice\Seeders;


use App\Models\User;
use App\Models\Product;
use App\Contracts\IRoles;
use App\Contracts\IUserRole;
use App\Helpers\GeneralHelper;
use App\Models\PartnerCompany;
use Illuminate\Database\Seeder;
use App\Models\VerificationMethod;
use Illuminate\Support\Facades\DB;
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
        $super_admin->assignRole(IUserRole::SUPER_ADMIN);
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
