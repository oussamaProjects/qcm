<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // Create Admin User
        // DB::table('users')->insert(
        //     array(
        //         'nom' => 'Super',
        //         'prenom' => 'Admin',
        //         'email' => 'admin@quiz.com',
        //         'password' => '$2y$10$7/Bqh2o8Ev6Qfqn5yfa1rO/pf4iyOudu.Kcb5gaBFH9OPYa3JZjci', // 123456789
        //         'role' => '1',
        //         'photo' => 'avatar.jpg'
        //     )
        // );

        DB::table('classes')->insert(
            array(
                'nom' => 'Class 1',
            )
        );
        DB::table('classes')->insert(
            array(
                'nom' => 'Class 2',
            )
        );

        DB::table('users')->insert(
            array(
                'nom' => 'Oussama',
                'prenom' => 'User',
                'email' => 'oussama@admin.com',
                'password' => '$2y$10$7/Bqh2o8Ev6Qfqn5yfa1rO/pf4iyOudu.Kcb5gaBFH9OPYa3JZjci', // 123456789
                'role' => '3',
                'photo' => 'avatar.jpg',
                'classe_id' => '1',
            )
        );

        DB::table('users')->insert(
            array(
                'nom' => 'Yassin',
                'prenom' => 'User',
                'email' => 'yassin@admin.com',
                'password' => '$2y$10$7/Bqh2o8Ev6Qfqn5yfa1rO/pf4iyOudu.Kcb5gaBFH9OPYa3JZjci', // 123456789
                'role' => '3',
                'photo' => 'avatar.jpg',
                'classe_id' => '1',
            )
        );

        DB::table('matieres')->insert(
            array(
                'nom' => 'Matier 1',
                'photo' => 'quiz.jpg',
                'description' => '',
                'enseignant_id' => '1',
            )
        );
      

        DB::table('classe_matiere')->insert(
            array(
                'classe_id' => '1',
                'matiere_id' => '1',
            )
        );

       
        DB::table('niveaux')->insert(
            array(
                'numero' => '1',
                'nom' => 'Niveau 1',
                'matiere_id' => '1',
            )
        );

        DB::table('niveaux')->insert(
            array(
                'numero' => '2',
                'nom' => 'Niveau 2',
                'matiere_id' => '1',
            )
        );

        DB::table('qcms')->insert(
            array(
                'nom' => 'question',
                'duree' => '15',
                'niveau_id' => '1',
            )
        );

        DB::table('questions')->insert(
            array(
                'question' => 'question',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'faux',
                'reponse2' => 'faux',
                'reponse3' => 'vrai',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );

        DB::table('questions')->insert(
            array(
                'question' => 'question 2',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'faux',
                'reponse2' => 'faux',
                'reponse3' => 'vrai',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );

        DB::table('questions')->insert(
            array(
                'question' => 'question 3',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'faux',
                'reponse2' => 'faux',
                'reponse3' => 'vrai',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );

        DB::table('questions')->insert(
            array(
                'question' => 'question 4',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'faux',
                'reponse2' => 'faux',
                'reponse3' => 'vrai',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );
        DB::table('questions')->insert(
            array(
                'question' => 'question 5',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'faux',
                'reponse2' => 'faux',
                'reponse3' => 'vrai',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );
        DB::table('questions')->insert(
            array(
                'question' => 'question 6',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'faux',
                'reponse2' => 'faux',
                'reponse3' => 'vrai',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );
        DB::table('questions')->insert(
            array(
                'question' => 'question 7',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'faux',
                'reponse2' => 'faux',
                'reponse3' => 'vrai',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );
        DB::table('questions')->insert(
            array(
                'question' => 'question 8',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'faux',
                'reponse2' => 'faux',
                'reponse3' => 'vrai',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );
        DB::table('questions')->insert(
            array(
                'question' => 'question 9',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'vrai',
                'reponse2' => 'faux',
                'reponse3' => 'faux',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );
        DB::table('questions')->insert(
            array(
                'question' => 'question 10',
                'choix1' => 'Choix 1',
                'choix2' => 'Choix 2',
                'choix3' => 'Choix 3',
                'choix4' => 'Choix 4',
                'reponse1' => 'faux',
                'reponse2' => 'vrai',
                'reponse3' => 'faux',
                'reponse4' => 'faux',
                'note' => '3',
                'qcm_id' => '1',
            )
        );

    }
}
