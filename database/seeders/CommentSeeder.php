<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create(
            [
          'id'=>1,
                'type'=>'news',
                'type_id'=>1,
                'parent_id'=>1,
                'text'=>'Happy',
                'comment_by_id'=>1
            ]);

            Comment::create([
                'id'=>2,
                'type'=>'blogs',
                'type_id'=>2,
                'parent_id'=>2,
                'text'=>'Happy happy',
                'comment_by_id'=>2
            ]);
            Comment::create([
                'id'=>3,
                'type'=>'blogs',
                'type_id'=>3,
                'parent_id'=>3,
                'text'=>'Happy shappy',
                'comment_by_id'=>3
            ]);
    }
}
