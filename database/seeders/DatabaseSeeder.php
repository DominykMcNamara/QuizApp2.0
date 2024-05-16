<?php

    namespace Database\Seeders;

    use App\Models\Question;
    use App\Models\Quiz;
    use App\Models\User;
    use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            // User::factory(10)->create();

            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

            Quiz::factory(4)->create();
            Question::factory(10)->create();
        }
    }
