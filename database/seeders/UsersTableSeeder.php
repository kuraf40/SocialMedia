<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nom' => 'ALIDOU',
            'prenom' => 'Farouk',
            'email' => 'farouk.alidou@example.com',
            'password'=>bcrypt('password123'),
            'username'=>'superuser1',
            'date_naissance'=>'2000-01-01',
            'date_inscription'=>'2025-12-27',
            'role'=>'admin',
        ]);



         User::create([
            'nom' => 'MOMO',
            'prenom' => 'Atanda',
            'email' => 'atanda.momo@example.com',
            'password'=>bcrypt('password456'),
            'username'=>'superuser2',
            'date_naissance'=>'2000-01-01',
            'date_inscription'=>'2025-12-27',
            'role'=>'admin',
        ]);



         User::create([
            'nom' => 'AZERTY',
            'prenom' => 'clavier',
            'email' => 'clavier.azerty@example.com',
            'password'=>bcrypt('password789'),
            'username'=>'clazerty',
            'date_naissance'=>'2000-04-01',
            'date_inscription'=>'2025-12-29',
            'role'=>'user',
        ]);

        User::create([
            'nom' => 'QWERTY',
            'prenom' => 'clavier',
            'email' => 'clavier.qwerty@example.com',
            'password'=>bcrypt('password101112'),
            'username'=>'clawerty',
            'date_naissance'=>'2004-04-01',
            'date_inscription'=>'2025-12-27',
            'role'=>'user',
        ]);


        User::create([
            'nom' => 'ASSOGBA',
            'prenom' => 'Prince',
            'email' => 'prince.assogba@example.com',
            'password'=>bcrypt('princepassword'),
            'username'=>'lepapa',
            'date_naissance'=>'2005-06-18',
            'date_inscription'=>'2025-12-29',
            'role'=>'user',
        ]);

    }
}
