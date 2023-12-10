<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Lecturer;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->unique()->userName(),
            'name' => fake()->name(),
            'password' => 'abcd',
            'email' => fake()->email(),
        ];
    }

    public function student()
    {
        return $this->defineUser('userabcd123!@#', 'STU')->afterCreating(function (User $user) {
            Student::factory()->create([
                'username' => $user->username,
                'phone' => fake()->phoneNumber()
            ]);
        });
    }

    public function lecturer()
    {
        return $this->defineUser('lecturerabcd123!@#', 'LEC')->afterCreating(function (User $user) {
            Lecturer::factory()->create([
                'username' => $user->username,
                'description' => fake()->text()
            ]);
        });
    }

    public function admin()
    {
        return $this->defineUser('adminabcd123!@#', 'ADM')->afterCreating(function (User $user) {
            Admin::factory()->create([
                'username' => $user->username
            ]);
        });
    }

    public function defineUser(string $password, string $role): Factory|UserFactory
    {
        return $this->state(function (array $attributes) use ($password, $role) {
            return [
            'password' => Hash::make($password),
            'role' => $role
            ];
        });
    }
}
