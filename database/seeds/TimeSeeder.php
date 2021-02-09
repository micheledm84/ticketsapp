<?php

use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([

            [
                'id' => 1,
                'date' => '2021-05-02',
                'start' => '11:13',
                'end' => '19:13',
                'badge_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'date' => '2021-05-02',
                'start' => '11:14',
                'end' => '19:16',
                'badge_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'date' => '2021-05-02',
                'start' => '11:15',
                'end' => '19:15',
                'badge_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'date' => '2021-06-02',
                'start' => '11:14',
                'end' => '19:15',
                'badge_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'date' => '2021-06-02',
                'start' => '11:15',
                'end' => '19:17',
                'badge_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'date' => '2021-06-02',
                'start' => '11:17',
                'end' => '19:17',
                'badge_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'date' => '2021-06-02',
                'start' => '11:17',
                'end' => '19:15',
                'badge_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'date' => '2021-06-02',
                'start' => '11:17',
                'end' => '19:14',
                'badge_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'date' => '2021-06-02',
                'start' => '11:19',
                'end' => '19:14',
                'badge_id' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'date' => '2021-07-02',
                'start' => '11:14',
                'end' => '19:15',
                'badge_id' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'date' => '2021-07-02',
                'start' => '11:15',
                'end' => '19:15',
                'badge_id' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'date' => '2021-07-02',
                'start' => '11:15',
                'end' => '19:25',
                'badge_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'date' => '2021-07-02',
                'start' => '11:15',
                'end' => '19:33',
                'badge_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'date' => '2021-08-02',
                'start' => '11:15',
                'end' => '19:21',
                'badge_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
        /*$table->id();
            $table->date('date');
            $table->time('start');
            $table->time('end');
            $table->unsignedBigInteger('badge_id');
            $table->softDeletes();
            $table->timestamps();*/
    }
}
