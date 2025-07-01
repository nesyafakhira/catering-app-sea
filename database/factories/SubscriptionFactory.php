<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mealTypes = ['Breakfast', 'Lunch', 'Dinner'];
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        $selectedMeals = $this->faker->randomElements($mealTypes, rand(1, 3));
        $selectedDays = $this->faker->randomElements($days, rand(2, 5));

        return [
            'name' => $this->faker->name(),
            'phone' => '08' . $this->faker->numerify('##########'),
            'plan' => $this->faker->randomElement(['Diet Plan', 'Protein Plan', 'Royal Plan']),
            'meal_types' => json_encode($selectedMeals),
            'delivery_days' => json_encode($selectedDays),
            'allergies' => $this->faker->optional()->word(),
            'total_price' => $this->faker->numberBetween(500000, 3000000),
        ];
    }
}
