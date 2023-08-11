<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [[
            'id' => 'f47ac10b-58cc-4372-a567-0e02b2',
            'name' => 'Wild Explorers',
            'slug' => 'Wild-Explorers',
            'price' => 550,
            'images' => 'https://i.ibb.co/JrcgDhc/camp1.jpg',
            'description' => "Camp Wild Explorers is a nature lover's dream. Kids aged 8-12 will embark on exciting hikes, learn survival skills, and observe wildlife in their natural habitat. It's an adventure of a lifetime that fosters a deep connection to the great outdoors.",
            'user_id' => 2
        ],
        [
            'id' => '6a5bb8b9-12b5-40b1-b9c1-71cde5',
            'name' => 'Tech Titans',
            'slug' => 'Tech-Titans',
            'price' => 750,
            'images' => 'https://i.ibb.co/MDF31Wm/camp3.jpg',
            'description' => "Camp Tech Titans is a tech-savvy paradise for young minds aged 10-14. Campers will learn coding, robotics, and engage in virtual reality experiences, all while nurturing their creativity and problem-solving skills.",
            'user_id' => 1
        ],
        [
            'id' => '9d9f7984-0b88-4b0d-97f2-4d37d6',
            'name' => 'Ocean Odyssey',
            'slug' => 'Ocean-Odyssey',
            'price' => 600,
            'images' => 'https://i.ibb.co/N22W46M/camp4.jpg',
            'description' => "Dive into the wonders of marine life at Camp Ocean Odyssey. Geared towards ages 9-13, campers will explore tide pools, learn about marine biology, and even try their hand at snorkeling. It's a marine adventure like no other.",
            'user_id' => 1
        ],
        [
            'id' => '48d83e96-59b5-4c74-9e2a-6dbf9f',
            'name' => 'Artistic Expressions',
            'slug' => 'Artistic-Expressions',
            'price' => 500,
            'images' => 'https://i.ibb.co/VM54rpP/camp5.jpg',
            'description' => "Camp Artistic Expressions is a haven for young artists aged 7-12. From painting and sculpture to dance and theater, campers will have the chance to express themselves and create beautiful works of art.",
            'user_id' => 1
        ],
        [
            'id' => '5a877c943-3e13-48c7-b57d-8468bf',
            'name' => 'Sports Mania',
            'slug' => 'Sports-Mania',
            'price' => 650,
            'images' => 'https://i.ibb.co/1Ly6mPX/download-9.jpg',
            'description' => "Sports enthusiasts aged 11-15 will thrive at Camp Sports Mania. Basketball, soccer, archery, and more await, providing a platform for campers to enhance their skills and learn the importance of teamwork.",
            'user_id' => 2
        ],
        [
            'id' => '6c9d9f257-6547-4ce2-8d6f-7a1226',
            'name' => 'Eco Guardians',
            'slug' => 'Eco-Guardians',
            'price' => 520,
            'images' => 'https://i.ibb.co/n8dmrR9/download-8.jpg',
            'description' => "Camp Eco Guardians is all about sustainability and conservation. Open to ages 12-16, campers will learn about eco-friendly practices, engage in community cleanups, and develop a deep appreciation for the environment.",
            'user_id' => 1
        ],
        [
            'id' => '72f4e6d1c-ebd5-4e16-8dd3-9ecdc3',
            'name' => 'Space Explorers',
            'slug' => 'Space-Explorers',
            'price' => 750,
            'images' => 'https://i.ibb.co/5L0G0WV/download-7.jpg',
            'description' => "Camp Space Explorers offers an out-of-this-world experience for kids aged 10-14. Campers will study astronomy, build model rockets, and simulate space missions, all while gaining a new perspective on the universe.",
            'user_id' => 1
        ],
        [
            'id' => '87b53276f-33d2-4edc-8bf9-0b0137',
            'name' => 'Adventure Quest',
            'slug' => 'Adventure-Quest',
            'price' => 580,
            'images' => 'https://i.ibb.co/HYGJgcc/download-14.jpg',
            'description' => "Camp Adventure Quest is an action-packed camp for ages 8-12. Ziplining, rock climbing, and obstacle courses will challenge campers' limits and instill a sense of achievement and confidence.",
            'user_id' => 2
        ],
        [
            'id' => '9a2b3c4d-5e6f-7a8b-9c0d-e1f2a3',
            'name' => 'Animal Friends',
            'slug' => 'Animal-Friends',
            'price' => 520,
            'images' => 'https://i.ibb.co/PZrrrFG/download-13.jpg',
            'description' => "Camp Animal Friends is perfect for animal lovers aged 7-11. Campers will interact with farm animals, learn about pet care, and engage in animal-themed crafts and activities.",
            'user_id' => 2
        ],
        [
            'id' => '10fb4b1a8f-2b6e-418b-9472-746348',
            'name' => 'Culinary Creations',
            'slug' => 'Culinary-Creations',
            'price' => 600,
            'images' => 'https://i.ibb.co/Jxyx6fF/download-12.jpg',
            'description' => "Budding chefs aged 9-13 can unleash their culinary talents at Camp Culinary Creations. From baking to cooking international cuisines, campers will whip up delectable dishes and satisfy their taste buds.",
            'user_id' => 1
        ],
        [
            'id' => '11c63c4f5-e491-4c39-8d16-c156f4',
            'name' => 'Fantasy Realms',
            'slug' => 'Fantasy-Realms',
            'price' => 670,
            'images' => 'https://i.ibb.co/ZmCWNGT/download-11.jpg',
            'description' => "Camp Fantasy Realms invites kids aged 10-14 into a world of imagination. Role-playing games, storytelling, and creative writing will transport campers to magical realms of their own making.",
            'user_id' => 2
        ],
        [
            'id' => '12a08b72c-1ccf-4262-9ed1-e62d06',
            'name' => 'Wilderness Survival',
            'slug' => 'Wilderness-Survival',
            'price' => 590,
            'images' => 'https://i.ibb.co/8cYn1j9/download-10.jpg',
            'description' => "Camp Wilderness Survival is an immersive experience for ages 11-15. Campers will learn essential survival skills, build shelters, and bond over campfire tales under the starlit sky.",
            'user_id' => 1
        ]];

        DB::table('camps')->insert($camps);
    }
}
