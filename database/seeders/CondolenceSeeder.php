<?php

namespace Database\Seeders;

use App\Models\Condolence;
use Illuminate\Database\Seeder;

class CondolenceSeeder extends Seeder
{
    public function run(): void
    {
        $tributes = [
            [
                'name' => 'Zonzon DCC Women\'s Fellowship',
                'affiliation' => 'ECWA Women\'s Fellowship',
                'message' => "Mama Deborah didn't just lead us; she walked with us. She taught us that a woman's greatest strength is her faith in action. We will continue the work she started in the villages. Rest well, our International Leader.",
                'is_approved' => true,
            ],
            [
                'name' => 'A Former Student (Kagoro Seminary)',
                'affiliation' => 'Student/Alumnus',
                'message' => "As Dean of Students, she was firm but incredibly fair. When I struggled with my fees, she didn't just counsel me; she found a way to help. She was the definition of a 'Mother in Israel.'",
                'is_approved' => true,
            ],
            [
                'name' => 'Anonymous',
                'affiliation' => 'New Convert',
                'message' => 'I arrived at her door with nothing but fear after fleeing my home. She gave me a bed, a Bible, and a new hope. Because of her, I am in school today. Her house was truly my first sanctuary.',
                'is_approved' => true,
            ],
        ];

        foreach ($tributes as $tribute) {
            Condolence::create($tribute);
        }
    }
}
