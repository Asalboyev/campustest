<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Qs;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $this->createNewUsers();
        $this->createManyUsers( 3);
    }

    protected function createNewUsers()
    {
        $password = Hash::make('cj'); // Default user password

        $d = [

            ['name' => 'Axror',
                'email' => 'cj@cj.com',
                'username' => 'cj',
                'password' => $password,
                'user_type' => 'super_admin',
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            ['name' => 'Admin KORA',
            'email' => 'admin@admin.com',
            'password' => $password,
            'user_type' => 'admin',
            'username' => 'admin',
            'code' => strtoupper(Str::random(10)),
            'remember_token' => Str::random(10),
            ],

            ['name' => 'Teacher Chike',
                'email' => 'teacher@teacher.com',
                'user_type' => 'teacher',
                'username' => 'teacher',
                'password' => $password,
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            ['name' => 'Parent Kaba',
                'email' => 'parent@parent.com',
                'user_type' => 'parent',
                'username' => 'parent',
                'password' => $password,
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

     
        ];
        DB::table('users')->insert($d);
    }

    protected function createManyUsers(int $count)
    {
      
    }
}
