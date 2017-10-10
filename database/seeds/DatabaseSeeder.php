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
        $this->call(UsersTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(HashtagsTableSeeder::class);
        $this->call(PasswordTableSeeder::class);
        $this->call(PostLikeTableSeeder::class);
        $this->call(PostReportTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PostTagTableSeeder::class);
        $this->call(PostBlacklistTableSeeder::class);
        $this->call(UserFollowerTableSeeder::class);
        $this->call(UserFollowingTableSeeder::class);
    }
}
