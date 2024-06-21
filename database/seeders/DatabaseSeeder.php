<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $claseSeeder = new ClaseSeeder();
        $claseSeeder->run();
        
        $colorSeeder = new ColorSeeder();
        $colorSeeder->run();        
        
        $marcaSeeder = new MarcaSeeder();
        $marcaSeeder->run();        
                
        $rolSeeder = new RolSeeder();
        $rolSeeder->run();
        
        $tipoSeeder = new TipoSeeder();
        $tipoSeeder->run();
        
        $usoSeeder = new UsoSeeder();
        $usoSeeder->run();
        
        $usuarioSeeder = new UsuarioSeeder();
        $usuarioSeeder->run();
        
        $planSeeder = new PlanSeeder();
        $planSeeder->run();

        $clienteSeeder = new ClienteSeeder();
        $clienteSeeder->run();
        
        $vehiculoSeeder = new VehiculoSeeder();
        $vehiculoSeeder->run();
        
        $contratoSeeder = new ContratoSeeder();
        $contratoSeeder->run();
        
        

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
