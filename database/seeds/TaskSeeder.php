<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([

            [
                'id' => 1,
                'name' => 'Creating footer',
                'description' => 'The footer should be green and beautiful',
                'deadline' => '2021-08-02',
                'status_id' => 3,
                'project_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Dropping the database',
                'description' => 'The database was too ugly',
                'deadline' => '2021-08-05',
                'status_id' => 3,
                'project_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Creating the database',
                'description' => 'The db was ugly but it can be better',
                'deadline' => '2021-08-12',
                'status_id' => 3,
                'project_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'name' => 'Creating a select',
                'description' => 'It should have many options',
                'deadline' => '2021-08-22',
                'status_id' => 2,
                'project_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'name' => 'Creating the script',
                'description' => 'Maximum thirty rows',
                'deadline' => '2021-09-02',
                'status_id' => 2,
                'project_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'name' => 'Creating a boxplot',
                'description' => 'Study statistics before do that',
                'deadline' => '2021-09-02',
                'status_id' => 1,
                'project_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'name' => 'Creating user interface',
                'description' => 'I want to see many red elements',
                'deadline' => '2021-08-02',
                'status_id' => 1,
                'project_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'name' => 'Creating header',
                'description' => 'It must be responsive',
                'deadline' => '2020-08-02',
                'status_id' => 2,
                'project_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'name' => 'Creating footer',
                'description' => 'The footer should be yellow',
                'deadline' => '2020-05-02',
                'status_id' => 3,
                'project_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'name' => 'Looking at the tutorial',
                'description' => 'You must learn everything about Oracle',
                'deadline' => '2021-01-02',
                'status_id' => 2,
                'project_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'name' => 'Installing Symfony',
                'description' => 'This is the web framework of the future',
                'deadline' => '2020-08-02',
                'status_id' => 3,
                'project_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'name' => 'Installing Laravel',
                'description' => 'The version is 8',
                'deadline' => '2021-12-02',
                'status_id' => 1,
                'project_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'name' => 'Creating row',
                'description' => 'At least three rows',
                'deadline' => '2020-08-22',
                'status_id' => 1,
                'project_id' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'name' => 'Creating column',
                'description' => 'At list four columns',
                'deadline' => '2021-05-02',
                'status_id' => 2,
                'project_id' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'name' => 'Creating header',
                'description' => 'The header must be black',
                'deadline' => '2020-08-12',
                'status_id' => 2,
                'project_id' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
