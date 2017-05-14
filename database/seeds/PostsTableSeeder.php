<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array(
            [
                'title' =>'PHP is good',
                'alias' => 'PHP_is_good',
                'intro' =>'PHP stands for “Personal Home Page” …',
                'body' =>'PHP stands for “Personal Home Page” ….
                 well, at least it used to, back in the day when 
                 it was first created in 1995. The first version was,
                  to put it nicely, not so good. Everything was messed up,
                  a lot of html code mixed with dynamic code and
                  includes all over the place. It also had a very
                  limited set of features.'
            ],
            [
                'title' =>'Laravel 5.4',
                'alias' => 'Laravel_5.4',
                'intro' =>'Laravel already makes it easy
                 to perform authentication via traditional login forms',
                'body' =>'Laravel already makes it easy
                 to perform authentication via traditional login forms,
                 but what about APIs? APIs typically use tokens
                 to authenticate users and do not maintain session
                  state between requests. '
            ],
            [
                'title' =>'Thank to seeds',
                'alias' => 'seeds',
                'intro' =>'All seed classes are stored in the database/seeds directory.',
                'body' =>'Laravel includes a simple method of seeding your database
                 with test data using seed classes.
                 All seed classes are stored in the database/seeds directory. '
            ]
            )
    );
    }
}
