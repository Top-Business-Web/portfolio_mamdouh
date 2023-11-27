<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "John Doe",
                "email" => "john.doe@example.com",
                "subject" => "Inquiry",
                "message" => "This is a sample message for John Doe.",
            ],
            [
                "name" => "Jane Smith",
                "email" => "jane.smith@example.com",
                "subject" => "Feedback",
                "message" => "Another sample message for Jane Smith.",
            ],
            [
                "name" => "Alice Johnson",
                "email" => "alice.johnson@example.com",
                "subject" => "Support",
                "message" => "Sample support message from Alice Johnson.",
            ],
            [
                "name" => "Bob Anderson",
                "email" => "bob.anderson@example.com",
                "subject" => "Question",
                "message" => "A question from Bob Anderson.",
            ],
            [
                "name" => "Eva Wilson",
                "email" => "eva.wilson@example.com",
                "subject" => "General Inquiry",
                "message" => "Eva Wilson has a general inquiry.",
            ],
            // Add more fake data as needed
        ];

        DB::table('contacts')->insert($data);
    }
}
