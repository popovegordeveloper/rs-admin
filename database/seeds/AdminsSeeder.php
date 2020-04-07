<?php


class AdminsSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        \Rs\RsAdmin\Models\Admin::create([
            'name' => 'Администратор',
            'email' => 'admin@admin.ru',
            'password' => bcrypt('secret12345'),
        ]);
    }
}
