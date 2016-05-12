<?php

use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'tweet' => 'First sample tweet.',
            'status' => 0,
            'organization' => 'dwa15',
        ]);

        DB::table('tweets')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'tweet' => 'Second sample tweet.',
            'status' => 0,
            'organization' => 'dwa15',
        ]);

        DB::table('tweets')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'tweet' => 'Third sample tweet.',
            'status' => 0,
            'organization' => 'dwa15',
        ]);

        DB::table('tweets')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'tweet' => 'An example tweet to edit.',
            'status' => 5,
            'organization' => 'dwa15',
        ]);

        DB::table('tweets')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'tweet' => 'An example tweet ready to tweet.',
            'status' => 1,
            'organization' => 'dwa15',
        ]);

        DB::table('tweets')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'tweet' => 'An example tweet that has been tweeted.',
            'status' => 3,
            'organization' => 'dwa15',
        ]);

        DB::table('tweets')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'tweet' => 'An example tweet that was rejected.',
            'status' => 4,
            'organization' => 'dwa15',
        ]);
    }
}
