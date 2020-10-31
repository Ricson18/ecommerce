<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname'=>$this->faker->firstName,
            'lname'=>$this->faker->lastName,
            'image'=>$this->faker->image,
            'email'=>$this->faker->unique()->safeEmail,
            'email_verified_at'=>$this->faker->dateTime,
            'password'=>$this->faker->password,
            'city'=>$this->faker->city,
            'state'=>$this->faker->state,
            'country'=>$this->faker->country,
            'phone'=>$this->faker->phoneNumber,
            'address1'=>$this->faker->address,
            'address2'=>$this->faker->address,
            'zip'=>$this->faker->postcode,
            'billingCity'=>$this->faker->city,
            'billingCountry'=>$this->faker->country,
            'billingAddress1'=>$this->faker->address,
            'billingAddress2'=>$this->faker->address,
            'billingPostalCode'=>$this->faker->postcode,
            'billingEmail'=>$this->faker->email,
        ];
    }
}
