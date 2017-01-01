<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(NewsSeeder::class);

        Model::reguard();
    }
}
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->delete();
        News::create([
            'title' => 'First Post',
            'slug' => 'first-post',
            'short' => '<p>First post body</p>',
            'content' => '<p>First post content</p>',
            'published' => true,
            'date' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        News::create([
            'title' => 'Second Post',
            'slug' => 'second-post',
            'short' => '<p>Second post body</p>',
            'content' => '<p>Second post content</p>',
            'published' => false,
            'date' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        News::create([
            'title' => 'Third Post',
            'slug' => 'third-post',
            'short' => '<p>Third post body</p>',
            'content' => '<p>Third post content</p>',
            'published' => true,
            'date' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
