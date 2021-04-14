<?php

namespace App\DataFixtures;

use App\Entity\Agents;
use App\Entity\AnnonceDetails;
use App\Entity\AnnoncePhotos;
use App\Entity\Annonces;
use App\Entity\Users;
use App\Entity\WebsiteInfos;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as faker;
use Faker\Provider\Image;

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
            $user->setEmailVerifiedAt(new \DateTime());
            $user->setPassword('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');// password
            $user->setRememberToken('');

            $manager->persist($user);
        }

        for ($i = 0; $i < 3; $i++) {
            $agent = new Agents();

            $agent->setName($faker->name);
            $agent->setEmail($faker->unique()->safeEmail);
            $agent->setPhone($faker->phoneNumber);
            $agent->setPicture(Image::imageUrl(640, 480, 'people'));

            $manager->persist($agent);

            for ($j = 0; $j < rand(8, 12);$j++) {
                $annonce = new Annonces();

                $annonce->setAgent($agent);
                $annonce->setTitle($faker->text(10));
                $annonce->setDescription($faker->paragraphs(rand(3, 6), true));

                $ar_immo_type = ['Appartement','Maison','Villa','Terain','Studio','Duplexe'];
                shuffle($ar_immo_type);
                $annonce->setImmoType($ar_immo_type[0]);

                $ar_sale_type = [ 'Vente','Location','Hypothech' ];
                shuffle($ar_sale_type);
                $annonce->setSaleType($ar_sale_type[0]);

                $annonce->setPrice($faker->randomFloat(0, 50000, 100000));

                $annonce->setVideo('<iframe width="560" height="315" src="https://www.youtube.com/embed/AVhaRg4xG4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

                $manager->persist($annonce);

                for ($k = 0; $k < rand(0, 12);$k++) {
                    $annoncePhotos = new AnnoncePhotos();

                    $annoncePhotos->setAnnonce($annonce);
                    $annoncePhotos->setPhoto(Image::imageUrl(640, 480, 'city'));

                    $manager->persist($annoncePhotos);
                }

                for ($k = 0; $k < rand(0, 12);$k++) {
                    $annonceDetails = new AnnonceDetails();

                    $annonceDetails->setAnnonce($annonce);
                    $annonceDetails->setName($faker->words(2, true));
                    $annonceDetails->setValue($faker->words(2, true));

                    $manager->persist($annonceDetails);
                }
            }
        }

        $websiteInfos = new WebsiteInfos();

        $websiteInfos->setName('Immorama');
        $websiteInfos->setAddress($faker->address);
        $websiteInfos->setCity($faker->city);
        $websiteInfos->setAnalyticsTag('google analytic');
        $websiteInfos->setLogo(Image::imageUrl(640, 480, 'business'));
        $websiteInfos->setFacebookUrl('https://facebook.com');
        $websiteInfos->setInstagramUrl('https://instagram.com');
        $websiteInfos->setLinkedinUrl('https://linkedin.com');
        $websiteInfos->setMap(json_encode([$faker->latitude(), $faker->longitude()]));

        $manager->persist($websiteInfos);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
