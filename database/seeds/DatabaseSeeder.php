<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\AdminModel;
use App\UserModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    /*public function run()
    {
        $this->call(UsersTable::class);
        $this->call(AdminTable::class);
    }
    */
    public function run()
    {
        /*factory(App\UserModel::class, 2)->create()->each(function ($user) {
            $user->save(factory(App\AdminModel::class)->make());
        });*/
        factory(UserModel::class)->create();
        factory(AdminModel::class)->create();
    }
}
