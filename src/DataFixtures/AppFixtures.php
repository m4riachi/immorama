<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as faker;
use Carbon\Carbon;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = faker::create();

        // create user
        for ($i = 0; $i < 1; $i++) {
            $user = new Users();

            $user->setName($faker->name);
            $user->setEmail($faker->unique()->safeEmail);
            $user->setEmailVerifiedAt(Carbon::now());
            $user->setPassword('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');// password
            $user->setRememberToken('');

            $manager->persist($user);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
