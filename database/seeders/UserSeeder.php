<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data_admin = [
        [
            'name' => 'AFIFAH NUR FADIYAH',
            'username' => 'afifah',
            'email' => 'afifah.fadiyah@binus.ac.id',
            'nim' => '2702489804',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        [
            'name' => 'FIORENZA TERESA SUPIT',
            'username' => 'fiorenza',
            'email' => 'fiorenza.supit@binus.ac.id',
            'nim' => '2702509762',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        [
            'name' => 'HABIB AZIZUL HAQ',
            'username' => 'habib',
            'email' => 'habib.haq@binus.ac.id',
            'nim' => '2702488253',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        [
            'name' => 'R. TRI CAHYO BAGAS HARLIANTO',
            'username' => 'tricahyo',
            'email' => 'r.harlianto@binus.ac.id',
            'nim' => '2702499023',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        [
            'name' => 'RIZAL MUFTHI AKBAR',
            'username' => 'rizal',
            'email' => 'rizal.akbar@binus.ac.id',
            'nim' => '2702509453',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        [
            'name' => 'VISTHALIA',
            'username' => 'vistha',
            'email' => 'visthalia@binus.ac.id',
            'nim' => '2702508500',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        [
            'name' => 'MUHAMMAD ZAKKY FUADY',
            'username' => 'zakky_f',
            'email' => 'muhammad.fuady@binus.ac.id',
            'nim' => '2702509516',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        [
            'name' => 'HENDRIANTO',
            'username' => 'hendrii',
            'email' => 'hendrianto@binus.ac.id',
            'nim' => '2702505543',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        [
            'name' => 'WARDIMANSYAH',
            'username' => 'wardiii',
            'email' => 'wardimansyah@binus.ac.id',
            'nim' => '2702503260',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        [
            'name' => 'DHIMAZ NUR RAMADHAN',
            'username' => 'dimas_n',
            'email' => 'dhimaz.ramadhan@binus.ac.id',
            'nim' => '2702500744',
            'email_verified_at' => now(),
            'is_admin' => true,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ],
        ];

        
        // untuk insert ke DB
        foreach ($data_admin as $item) {
            User::create($item);
        }

    }
}
