<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        $car1 = new Car();
        $car1->model = "Urbano";
        $car1->brand = "Ford";
        $car1->engine = "Gasolina";
        $car1->color = "Rojo";
        $car1->registration = "ABC123";
        $car1->doors = 5;

        $car2 = new Car();
        $car2->model = "Familiar";
        $car2->brand = "Chevrolet";
        $car2->engine = "Diésel";
        $car2->color = "Blanco";
        $car2->registration = "CDE456";
        $car2->doors = 4;

        $car3 = new Car();
        $car3->model = "Sedán";
        $car3->brand = "Fiat";
        $car3->engine = "GNC";
        $car3->color = "Gris";
        $car3->registration = "FGH789";
        $car3->doors = 5;

        $car4 = new Car();
        $car4->model = "Coupé";
        $car4->brand = "Ford";
        $car4->engine = "Gasolina";
        $car4->color = "Azul";
        $car4->registration = "HGR345";
        $car4->doors = 3;
    }
}
