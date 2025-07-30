<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kode = strtoupper($this->faker->bothify('??###'));

        return [
            'name'   => 'Ruang ' . $kode,
            'address' => $this->faker->address(),         // dengan 'id_ID' akan jadi alamat Indonesia
            'phone'  => $this->faker->phoneNumber(),     // format IDN jika 'id_ID' di config
            'description'  => $this->faker->paragraph(),
        ];
    }
}
