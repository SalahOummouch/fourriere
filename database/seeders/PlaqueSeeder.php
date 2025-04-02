<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plaque;
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PlaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Instancier Faker
        $faker = Faker::create();

        // Vérifier s'il y a des utilisateurs existants
        $users = User::all();

        // S'assurer qu'il y a au moins un utilisateur pour éviter les erreurs
        if ($users->isEmpty()) {
            $users = User::factory(10)->create(); // Créer 10 utilisateurs si la table est vide
        }

        // Liste des statuts valides
        $statuses = ['en_fourrière', 'libre', 'en_cours'];

        // Insérer des plaques avec des utilisateurs associés
        foreach ($users as $user) {
            $status = $faker->randomElement($statuses);
            Plaque::create([
                'user_id' => $user->id,
                'numero_plaque' => strtoupper(Str::random(7)), // Exemple : ABC1234
                'status' => $status, // Sélectionne un statut valide
                'adresse' => $status === 'en_fourrière' ? $faker->address() : '', // Adresse uniquement si "en_fourrière", sinon chaîne vide
                'date_recherche' =>($status === 'en_fourrière' || $status === 'libre')  ? $faker->date(): null,
            ]);
        }
    }
}
