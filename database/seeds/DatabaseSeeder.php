<?php

use App\Models\Comment;
use App\Models\MediaLibrary;
use App\Models\Post;
use App\Models\Role;
use App\Models\Token;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Roles
        Role::firstOrCreate(['name' => Role::ROLE_EDITOR]);
        $role_admin = Role::firstOrCreate(['name' => Role::ROLE_ADMIN]);

        // MediaLibrary
        MediaLibrary::firstOrCreate([]);

        // Users
        $user = User::firstOrCreate(
            ['email' => 'namvu1210@gmail.com'],
            [
                'name' => 'Nam Vu',
                'password' => Hash::make('123456'),
                'email_verified_at' => now()
            ]
        );

        $user->roles()->sync([$role_admin->id]);

        // Posts
        $post = Post::Create([
            'title' => 'Hello World',
            'author_id' => $user->id,
            'posted_at' => now(),
            'en'  => [
                'content' => "Welcome to Laravel-blog !<br><br>
                    Don't forget to read the README before starting.<br><br>",
                'sub_title' => 'Hello World'
            ],
            'vi'  => [
                'content' => "Chào mừng đến với Laravel-blog !<br><br>
                        Đừng quên đọc README trước khi bắt đầu.<br><br>",
                'sub_title' => 'Chào mừng'
            ],
        ]);

        // Comments
        Comment::firstOrCreate(
            [
                'author_id' => $user->id,
                'post_id' => $post->id
            ],
            [
                'posted_at' => now(),
                'content' => "Hey ! I'm a comment as example."
            ]
        );

        // API tokens
        User::where('api_token', null)->get()->each->update([
            'api_token' => Token::generate()
        ]);
    }
}
