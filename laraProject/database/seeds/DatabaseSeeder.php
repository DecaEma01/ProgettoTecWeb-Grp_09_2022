<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
            ['id_utente' => 1, 'livello' => 3, 'sesso' => null, 'eta' => null,'email' => 'adminMail@gmail.com','password' => 'adminPass','nome' =>null,'cognome' =>null],
            ['id_utente' => 2, 'livello' => 2, 'sesso' => null, 'eta' => null,'email' => 'bellamail@gmail.com','password' => 'apass','nome' =>'Franco','cognome' =>'Bianchi'],
            ['id_utente' => 3, 'livello' => 2, 'sesso' => 'M', 'eta' => 21,'email' => 'bellamail@gmail.com','password' => 'bpass','nome' =>'Fede','cognome' =>'River'],
            ['id_utente' => 4, 'livello' => 2, 'sesso' => 'M', 'eta' => 19,'email' => 'ParadiseMail@gmail.com','password' => 'cpass','nome' =>'Giorgio','cognome' =>'Rossi'],
            ['id_utente' => 5, 'livello' => 1, 'sesso' => null, 'eta' => null,'email' => 'windbreaker@gmail.com','password' => 'dpass','nome' =>'Eren','cognome' =>'Jaeger'],
            ['id_utente' => 6, 'livello' => 1, 'sesso' => null, 'eta' => null,'email' => 'yugi@gmail.com','password' => 'epass','nome' =>'Ivo','cognome' =>'Palladino'],
            ['id_utente' => 7, 'livello' => 1, 'sesso' => null, 'eta' => null,'email' => 'supreme@gmail.com','password' => 'fpass','nome' =>'Sandro','cognome' =>'Minu'],
            ['id_utente' => 8, 'livello' => 1, 'sesso' => null, 'eta' => null,'email' => 'bellamail@gmail.com','password' => 'gpass','nome' =>'Xavier','cognome' =>'Lofi'],
            ['id_utente' => 9, 'livello' => 2, 'sesso' => 'F', 'eta' => 26,'email' => 'bellamail@gmail.com','password' => 'hpass','nome' =>'Axel','cognome' =>'Toma'],
            ['id_utente' => 10, 'livello'=> 2, 'sesso' => 'F', 'eta' => 22,'email' => 'bellamail@gmail.com','password' => 'ipass','nome' =>'Jude','cognome' =>'Verdi']
        ]);

        DB::table('casa')->insert([
            ['id_casa' => 1, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 2, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 3, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 4, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 5, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 6, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 7, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 8, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 9, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 10, 'regione' => 'Molise', 'via' => 'via roma', 'citta' => 'Termoli','data_inizio' => Carbon::create('2000', '01', '01'),'data_fine' => Carbon::create('2000', '01', '01'),'assegnata' =>false,'tipo' =>false,'prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3]
            
          
            
            /*['id_casa' => 2, 'regione' => 'Marche', 'via' => 'via roma', 'citta' => 'Ancona','data_inizio' => 2022-03-13,'data_fine' => 2022-04-13,'assegnata' =>false,'tipo' =>'A','prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 3, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 2022-03-13,'data_fine' => 2022-04-13,'assegnata' =>false,'tipo' =>'A','prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 4, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 2022-03-13,'data_fine' => 2022-04-13,'assegnata' =>false,'tipo' =>'A','prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 5, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 2022-03-13,'data_fine' => 2022-04-13,'assegnata' =>false,'tipo' =>'A','prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 6, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 2022-03-13,'data_fine' => 2022-04-13,'assegnata' =>false,'tipo' =>'A','prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 7, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 2022-03-13,'data_fine' => 2022-04-13,'assegnata' =>false,'tipo' =>'A','prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 8, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 2022-03-13,'data_fine' => 2022-04-13,'assegnata' =>false,'tipo' =>'A','prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 9, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 2022-03-13,'data_fine' => 2022-04-13,'assegnata' =>false,'tipo' =>'A','prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3],
            ['id_casa' => 10, 'regione' => 'molise', 'via' => 'via roma', 'citta' => 'termoli','data_inizio' => 2022-03-13,'data_fine' => 2022-04-13,'assegnata' =>false,'tipo' =>'A','prezzo' => 500, 'mq' => 100, 'wifi' => true, 'tv' => true,'terrazza' =>true, 'piano'=>3,'arredato'=> true,'eta_min' => 18,'eta_max' => 25,'sesso' => 'M', 'foto'=> null, 'Anum_camere' => 4, 'Anum_letti' => 4,'Acucina' => true,'Asoggiorno' => true,'Pletti_camera' =>null,'Pletti_app' =>null,'Pstudio' => null,'id_locatore' => 3]
        */
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
            ['id_opz' => 1, 'data_opz' => Carbon::create('2000', '01', '01'), 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4],
            ['id_opz' => 2, 'data_opz' => Carbon::create('2000', '01', '01'), 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4],
            ['id_opz' => 3, 'data_opz' => Carbon::create('2000', '01', '01'), 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4],
            ['id_opz' => 4, 'data_opz' => Carbon::create('2000', '01', '01'), 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4],
            ['id_opz' => 5, 'data_opz' => Carbon::create('2000', '01', '01'), 'id_casa' => 7, 'id_locatario' => 10,'id_chat' => 4]

        ]);

        
        DB::table('messaggio')->insert([
            ['id_messaggio' => 1, 'data_ora' => Carbon::create('2000', '01', '01'), 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4],
            ['id_messaggio' => 2, 'data_ora' => Carbon::create('2000', '01', '01'), 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4],
            ['id_messaggio' => 3, 'data_ora' => Carbon::create('2000', '01', '01'), 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4],
            ['id_messaggio' => 4, 'data_ora' => Carbon::create('2000', '01', '01'), 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4],
            ['id_messaggio' => 5, 'data_ora' => Carbon::create('2000', '01', '01'), 'testo' => "voglio vedere la casa", 'id_mittente' => 10,'id_chat' => 4]
        ]);

        DB::table('contratto')->insert([
            ['id_contratto' => 1, 'data' => Carbon::create('2000', '01', '01'), 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 2, 'data' => Carbon::create('2000', '01', '01'), 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 3, 'data' => Carbon::create('2000', '01', '01'), 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 4, 'data' => Carbon::create('2000', '01', '01'), 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 5, 'data' => Carbon::create('2000', '01', '01'), 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4],
            ['id_contratto' => 6, 'data' => Carbon::create('2000', '01', '01'), 'id_locatario' => 10, 'id_locatore' => 7,'id_opz' => 4,'id_casa' => 4]
        
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
