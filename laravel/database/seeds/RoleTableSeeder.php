<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;

class RoleTableSeeder extends Seeder{

    public function run()
    {

        if (App::environment() === 'production') {
            exit('ATENTIE! tabela roles va fi stearsa si recreata!');
        }

        DB::table('roles')->truncate();

        Role::create([
            'id'            => 1,
            'name'          => 'Root',
            'description'   => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.'
        ]);

        Role::create([
            'id'            => 2,
            'name'          => 'Supervisor',
            'description'   => 'Read only access - valabil la toate bisericile'
        ]);

        Role::create([
            'id'            => 3,
            'name'          => 'Administrator',
            'description'   => 'full access to create, edit - valabil doar pt biserica locala;'
        ]);

        Role::create([
            'id'            => 4,
            'name'          => 'Pastor',
            'description'   => 'acces la toate departamentele bisericii locale'
        ]);

        Role::create([
            'id'            => 5,
            'name'          => 'Secretar',
            'description'   => 'acces la modulul de secretariat al bisericii locale'
        ]);

        Role::create([
            'id'            => 6,
            'name'          => 'Casier',
            'description'   => 'acces la modulul de casierie al bisericii locale'
        ]);
    }

}