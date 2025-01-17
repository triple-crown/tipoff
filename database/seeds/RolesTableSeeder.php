<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('roles')->insert([
            'slug'          => 'admin',
            'title'         => 'Admin',
            'description'   => 'Tipoff Administors with full access',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('roles')->insert([
            'slug'          => 'user',
            'title'         => 'User',
            'description'   => 'All general users not on staff or paid subscribers',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('roles')->insert([
            'slug'          => 'subscriber',
            'title'         => 'Subscriber',
            'description'   => 'Paid Subscribers',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('roles')->insert([
            'slug'          => 'designers',
            'title'         => 'Graphic Designers',
            'description'   => 'Tipoff contributors with access to upload graphics for quotes and other content',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('roles')->insert([
            'slug'          => 'quotes-editor',
            'title'         => 'Quotes Editor',
            'description'   => 'Tipoff contributors with access to create and edit quotes and authors',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('roles')->insert([
            'slug'          => 'books-editor',
            'title'         => 'Books Editor',
            'description'   => 'Tipoff contributors with access to create and edit books and authors',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
