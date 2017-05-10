<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedCategoryRows::class);
        $this->call(SeedCategoryItemsRows::class);
        $this->call(SeedItemsGroupFileTitleRows::class);
        $this->call(SeedItemsDescriptionRows::class);
        $this->call(SeedCategoryItemImages::class);
        $this->call(SeedItemsDcDescritpionRows::class);
    }
}
