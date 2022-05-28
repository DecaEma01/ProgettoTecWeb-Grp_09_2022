<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('utente')->insert([
            ['id_utente' => 1, 'livello' => 3, 'sesso' => null, 'eta' => null,'email' => 'adminMail@gmail.com','user' => 'nomeUtente1','password' => 'adminPass','nome' =>null,'cognome' =>null],
            ['id_utente' => 2, 'livello' => 2, 'sesso' => null, 'eta' => null,'email' => 'bellamail@gmail.com','user' => 'nomeUtente2','password' => 'apass','nome' =>'Franco','cognome' =>'Bianchi'],
            ['id_utente' => 3, 'livello' => 2, 'sesso' => 'M', 'eta' => 21,'email' => 'bellamail@gmail.com','user' => 'nomeUtente3','password' => 'bpass','nome' =>'Fede','cognome' =>'River'],
            ['id_utente' => 4, 'livello' => 2, 'sesso' => 'M', 'eta' => 19,'email' => 'ParadiseMail@gmail.com','user' => 'nomeUtente4','password' => 'cpass','nome' =>'Giorgio','cognome' =>'Rossi'],
            ['id_utente' => 5, 'livello' => 1, 'sesso' => null, 'eta' => null,'email' => 'windbreaker@gmail.com','user' => 'nomeUtente5','password' => 'dpass','nome' =>'Eren','cognome' =>'Jaeger'],
            ['id_utente' => 6, 'livello' => 1, 'sesso' => null, 'eta' => null,'email' => 'yugi@gmail.com','user' => 'nomeUtente6','password' => 'epass','nome' =>'Ivo','cognome' =>'Palladino'],
            ['id_utente' => 7, 'livello' => 1, 'sesso' => null, 'eta' => null,'email' => 'supreme@gmail.com','user' => 'nomeUtente7','password' => 'fpass','nome' =>'Sandro','cognome' =>'Minu'],
            ['id_utente' => 8, 'livello' => 1, 'sesso' => null, 'eta' => null,'email' => 'bellamail@gmail.com','user' => 'nomeUtente8','password' => 'gpass','nome' =>'Xavier','cognome' =>'Lofi'],
            ['id_utente' => 9, 'livello' => 2, 'sesso' => 'F', 'eta' => 26,'email' => 'bellamail@gmail.com','user' => 'nomeUtente9','password' => 'hpass','nome' =>'Axel','cognome' =>'Toma'],
            ['id_utente' => 10, 'livello'=> 2, 'sesso' => 'F', 'eta' => 22,'email' => 'bellamail@gmail.com','user' => 'nomeUtente10','password' => 'ipass','nome' =>'Jude','cognome' =>'Verdi']
        ]);

        DB::table('casa')->insert([
            ['id_casa' => 1, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1600819200,'data_fine' => 1600819200,'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> 'public\media\01.jpg', 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 2, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1600819200,'data_fine' => 1600819200,'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> 'public\media\02.jpg', 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 3, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1600819200,'data_fine' => 1600819200,'assegnata' =>false,'tipo' =>true,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> 'public\media\03.jpg', 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 4, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1600819200,'data_fine' => 1600819200,'assegnata' =>false,'tipo' =>true,'prezzo' => 500, 'mq' => 50, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 5, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1600819200,'data_fine' => 1600819200,'assegnata' =>false,'tipo' =>true,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 6, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1600819200,'data_fine' => 1600819200,'assegnata' =>false,'tipo' =>true,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 7, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1600819200,'data_fine' => 1600819200,'assegnata' =>false,'tipo' =>true,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 8, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1590616800,'data_fine' => 1653688800,'assegnata' =>false,'tipo' =>true,'prezzo' => 200, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 3, 'Anum_letti' => 3,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>4,'Pletti_app' =>4,'Pstudio' => false,'id_locatore' => 3],
            ['id_casa' => 9, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1600819200,'data_fine' => 1600819200,'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 10, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 1600819200,'data_fine' => 1600819200,'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3]
            //90,true,1590616800,1653688800,'Termoli','Molise',3,3,true,true,4,4,false,100,300);
        ]);

        DB::table('chat')->insert([
            ['id_chat' => 1, 'id_casa' => 1, 'id_locatore' => 5, 'id_locatario' => 2],
            ['id_chat' => 2, 'id_casa' => 2, 'id_locatore' => 8, 'id_locatario' => 9],
            ['id_chat' => 3, 'id_casa' => 1, 'id_locatore' => 8, 'id_locatario' => 9],
            ['id_chat' => 4, 'id_casa' => 1, 'id_locatore' => 8, 'id_locatario' => 9],
            ['id_chat' => 5, 'id_casa' => 1, 'id_locatore' => 8, 'id_locatario' => 9],
            ['id_chat' => 6, 'id_casa' => 1, 'id_locatore' => 8, 'id_locatario' => 9]    
        ]);

        DB::table('opzionamento')->insert([
            ['id_opz' => 1, 'data_opz' => 1600819200, 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4],
            ['id_opz' => 2, 'data_opz' => 1600819200, 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4],
            ['id_opz' => 3, 'data_opz' => 1600819200, 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4],
            ['id_opz' => 4, 'data_opz' => 1600819200, 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4],
            ['id_opz' => 5, 'data_opz' => 1600819200, 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4]

        ]);

        
        DB::table('messaggio')->insert([
            ['id_messaggio' => 1, 'data_ora' => 1600819200, 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4],
            ['id_messaggio' => 2, 'data_ora' => 1600819200, 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4],
            ['id_messaggio' => 3, 'data_ora' => 1600819200, 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4],
            ['id_messaggio' => 4, 'data_ora' => 1600819200, 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4],
            ['id_messaggio' => 5, 'data_ora' => 1600819200, 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4]
        ]);

        DB::table('contratto')->insert([
            ['id_contratto' => 1, 'data' => 1600819200, 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 2, 'data' => 1600819200, 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 3, 'data' => 1600819200, 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 4, 'data' => 1600819200, 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 5, 'data' => 1600819200, 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 6, 'data' => 1600819200, 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4]
        
        ]);

        DB::table('faq')->insert([
            ['id_faq' => 1, 'domanda' => 'a cosa serve il sito?', 'risposta' => 'per affittare e prendere in affitto appartamenti o posti letto'],
            ['id_faq' => 2, 'domanda' => 'a cosa serve il sito?', 'risposta' => 'per affittare e prendere in affitto appartamenti o posti letto'],
            ['id_faq' => 3, 'domanda' => 'a cosa serve il sito?', 'risposta' => 'per affittare e prendere in affitto appartamenti o posti letto'],
            ['id_faq' => 4, 'domanda' => 'a cosa serve il sito?', 'risposta' => 'per affittare e prendere in affitto appartamenti o posti letto'],
            ['id_faq' => 5, 'domanda' => 'a cosa serve il sito?', 'risposta' => 'per affittare e prendere in affitto appartamenti o posti letto']

        ]);

    }
    
}
