<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'name' => 'DEVFEST',
                'description' => 'Stands for `Developers Festival`, DevFest is an annual, international festival organized by Google Developers Groups (GDGs) from around the world to bring together local developers and tech enthusiasts.',
                'imageURL' => 'https://www.gdgalgiers.com/_astro/DevFest_ygxhhe_Z22FMLI.webp',
                'start_date' => '2024-12-14',
                'end_date' => '2024-12-30',
                'active' => true,
            ],
            [
                'name' => 'GDG ALGIERS CTF',
                'description' => 'Capture The Flag (CTF) is a popular competition among Cyber Security enthusiasts. GDG Algiers brought this exciting challenge to the forefront with our international CTF Algiers event, held from October 7th to 9th, 2022.',
                'imageURL' => 'https://www.gdgalgiers.com/_astro/CTF.PNG_6_2MB_n8zwoy_vfOD2.webp',
                'start_date' => '2024-12-14',
                'end_date' => '2024-12-30',
                'active' => false,
            ],
            [
                'name' => 'HASHCODE',
                'description' => 'Hash Code is a team-based programming competition organized by Google for students and professionals worldwide, allowing participants to choose their preferred programming language. GDG Algiers hosts its own hub, bringing together participating teams in one place to solve real Google engineering challenges.',
                'imageURL' => 'https://www.gdgalgiers.com/_astro/HashCode_xwonor_1Y0sbz.webp',
                'start_date' => '2024-12-14',
                'end_date' => '2024-12-30',
                'active' => false,
            ],
            [
                'name' => 'FLUTTER FORWARD',
                'description' => 'Flutter Forward are community-led events where developers can dive into Google technologies through hands-on workshops and interactive sessions, focusing on Flutter and Firebase.',
                'imageURL' => 'https://www.gdgalgiers.com/_astro/Flutter_Forward_iwzwam_Z1r6FQs.webp',
                'start_date' => '2024-12-14',
                'end_date' => '2024-12-30',
                'active' => false,
            ],
            [
                'name' => 'GEDX',
                'description' => 'Inspired by TEDx talks, GedX is our special event where a series of talks are hosted, bringing together the best IT experts to share their ideas and insights.',
                'imageURL' => 'https://www.gdgalgiers.com/_astro/GedX_ve40nw_sYobK.webp',
                'start_date' => '2024-12-14',
                'end_date' => '2024-12-30',
                'active' => false,
            ],
            [
                'name' => 'GOOGLE I/O EXTENDED',
                'description' => 'Google I/O Extended is an internal event that extends the experience of Google I/O, bringing our dear members together and discussing a range of interesting topics about the latest developments in Google’s technologies.',
                'imageURL' => 'https://www.gdgalgiers.com/_astro/Google_IO_Extented_v6c88e_9Vggq.webp',
                'start_date' => '2024-12-14',
                'end_date' => '2024-12-30',
                'active' => false,
            ],
            [
                'name' => 'GCPC',
                'description' => 'GDG Competitive Programming Challenge (GCPC) brings together teams of programmers to showcase their coding skills. Participating teams will tackle challenges of varying difficulty levels, from easy to hard, in a collaborative environment.',
                'imageURL' => 'https://www.gdgalgiers.com/_astro/GCPC_n4shez_1FEJsq.webp',
                'start_date' => '2024-12-14',
                'end_date' => '2024-12-30',
                'active' => false,
            ],
            [
                'name' => 'GDG HACK',
                'description' => 'GDG Hack is an internal hackathon, organized for the GDG Internal community to foster integration and strengthen the bonds within the GDG Family.',
                'imageURL' => 'https://www.gdgalgiers.com/_astro/GDG_Hack_kikjg8_1q8ejv.webp',
                'start_date' => '2024-12-14',
                'end_date' => '2024-12-30',
                'active' => false,
            ],
            [
                'name' => 'GHACK',
                'description' => 'Ghack Algiers is a hackathon organized by GDG Algiers, debuting at the end of February. The event features two phases: an online phase, where teams develop ideas, and an onsite phase, where selected teams refine their projects with mentorship and compete for the final winner.',
                'imageURL' => 'https://www.gdgalgiers.com/_astro/G_Hack.PNG_5_5MB_obf7hg_2tiJ81.webp',
                'start_date' => '2024-12-14',
                'end_date' => '2024-12-30',
                'active' => false,
            ],
            // Add more data as needed
        ]);
    }
}

//$table->id();
//$table->string('name', 50);
//$table->text('description')->nullable();
//$table->text('imageURL')->nullable();
//$table->date('start_date');
//$table->date('end_date');
//$table->boolean('active');
//$table->timestamps();
