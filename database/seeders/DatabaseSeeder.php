<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Produit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'mame',
        //     'email' => 'test@example.com',
        // ]);

        $references = ['REF001', 'REF002', 'REF003', 'REF004', 'REF005', 'REF006'];
        
        foreach ($references as $reference) {
            $produit = new Produit();
            $produit->reference = $reference;
            $produit->prix_unitaire = rand(1000, 10000); 
            $produit->quantite_disponible = rand(0, 50); 
            $produit->etat = rand(0, 1) ? 'Stock' : 'Rupture'; 
            $produit->designation = 'Produit '.$reference; 
            $produit->image = 'https://via.placeholder.com/100';
            
            $produit->save();
        }
        //un seeder pour se connecter
        User::factory()->create([
            'name' => "mama saliou",
            'email' => 'mameSaliou@gmail.com',
            'password' => Hash::make('password12'),
        ]);  
    }
}
