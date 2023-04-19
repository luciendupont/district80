<?php

namespace App\DataFixtures;

use App\Entity\Plat;
use App\Entity\User;
use App\Entity\Detail;
use App\Entity\Commande;
use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cat = new Categorie();
        $cat->setLibelle("Pizza");
        $cat->setImage("pizza_cat.jpg");
        $cat->setActive("yes");
        $manager->persist($cat);

        $cat1 = new Categorie();
        $cat1->setLibelle("Burger");
        $cat1->setImage("burger_cat.jpg");
        $cat1->setActive("yes"); 
        $manager->persist($cat1);

        $cat2 = new Categorie();
        $cat2->setLibelle("Wraps");
        $cat2->setImage("warps_cat.jpg");
        $cat2->setActive("yes"); 
        $manager->persist($cat2);

        $cat3= new Categorie();
        $cat3->setLibelle("Pasta");
        $cat3->setImage("pasta_cat.jpg");
        $cat3->setActive("yes"); 
        $manager->persist($cat3);

        $cat4 = new Categorie();
        $cat4->setLibelle("Sandwich");
        $cat4->setImage("sandwich_car.jpg");
        $cat4->setActive("yes"); 
        $manager->persist($cat4);

        $cat5 = new Categorie();
        $cat5->setLibelle("Asian food");
        $cat5->setImage("asian_food_cat.jpg");
        $cat5->setActive("yes"); 
        $manager->persist($cat5);

        $cat6 = new Categorie();
        $cat6->setLibelle("Salade");
        $cat6->setImage("salade_cat.jpg");
        $cat6->setActive("yes"); 
        $manager->persist($cat6);

        $cat7 = new Categorie();
        $cat7->setLibelle("Veggie");
        $cat7->setImage("veggie_cat.jpg");
        $cat7->setActive("yes"); 
        $manager->persist($cat7);

        $plat = new Plat();
        $plat->setLibelle("District Burger");
        $plat->setDescription("Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits.");
        $plat->setPrix(8);
        $plat->setImage("hamburger.jpg");
        $plat->setActive(true);
        $plat->setCategorie($cat);
        $manager->persist($plat);

        $plat1 = new Plat();
        $plat1->setLibelle("Pizza Bianca");
        $plat1->setDescription("Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.");
        $plat1->setPrix(14);
        $plat1->setImage("pizza-salmon.png");
        $plat1->setActive(true);
        $plat1  ->setCategorie($cat1);
        $manager->persist($plat1);

        $plat2 = new Plat();
        $plat2->setLibelle("Buffalo Chicken Wrap");
        $plat2->setDescription("Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.");
        $plat2->setPrix(5);
        $plat2->setImage("buffalo-chicken.webp");
        $plat2->setActive(true);
        $plat2->setCategorie($cat2);
        $manager->persist($plat2);

        $plat3 = new Plat();
        $plat3->setLibelle("Cheeseburger");
        $plat3->setDescription("Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.");
        $plat3->setPrix(8);
        $plat3->setImage("cheesburger.jpg");
        $plat3->setActive(true);
        $plat3->setCategorie($cat1);
        $manager->persist($plat3);

        $plat4 = new Plat();
        $plat4->setLibelle("Spaghetti aux légumes");
        $plat4->setDescription("Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide.");
        $plat4->setPrix(10);
        $plat4->setImage("spaghetti-legumes.jpg");
        $plat4->setActive(true);
        $plat4->setCategorie($cat3);
        $manager->persist($plat4);

        $plat5 = new Plat();
        $plat5->setLibelle("Salade César");
        $plat5->setDescription("Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.");
        $plat5->setPrix(7);
        $plat5->setImage("cesar_salad.jpg");
        $plat5->setActive(true);
        $plat5->setCategorie($cat6);
        $manager->persist($plat5);

        $plat6 = new Plat();
        $plat6->setLibelle("Pizza Margherita");
        $plat6->setDescription("Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre.");
        $plat6->setPrix(14);
        $plat6->setImage("pizza-margherita.jpg");
        $plat6->setActive(true);
        $plat6->setCategorie($cat2);
        $manager->persist($plat6);

        $plat7 = new Plat();
        $plat7->setLibelle("Courgettes farcies au quinoa et duxelles de champignons");
        $plat7->setDescription("Voici une recette équilibrée à base de courgettes, quinoa et champignons, 100% vegan et sans gluten!");
        $plat7->setPrix(8);
        $plat7->setImage("courgettes_farcies.jpg");
        $plat7->setActive(true);
        $plat7->setCategorie($cat7);
        $manager->persist($plat7);

        $plat8 = new Plat();
        $plat8->setLibelle("lasagnes");
        $plat8->setDescription("Découvrez notre recette des lasagnes, l'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.");
        $plat8->setPrix(12);
        $plat8->setImage("lasagnes_viande.jpg");
        $plat8->setActive(true);
        $plat8->setCategorie($cat3);
        $manager->persist($plat8);

        $plat9 = new Plat();
        $plat9->setLibelle("tagliatelles au samon");
        $plat9->setDescription("Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal!");
        $plat9->setPrix(12);
        $plat9->setImage("tagliatelles_saumon.webp");
        $plat9->setActive(true);
        $plat9->setCategorie($cat3);
        $manager->persist($plat9);


        $detail= new Detail();
        $detail->setQuantite(4);
        $detail->setPlat($plat);
        $manager->persist($detail);

        $detail1= new Detail();
        $detail1->setQuantite(2);
        $detail1->setPlat($plat1);
        $manager->persist($detail1);

        $detail2= new Detail();
        $detail2->setQuantite(1);
        $detail2->setPlat($plat1);
        $manager->persist($detail2);

        $detail3= new Detail();
        $detail3->setQuantite(1);
        $detail3->setPlat($plat2);
        $manager->persist($detail3);

        $detail4= new Detail();
        $detail4->setQuantite(2);
        $detail4->setPlat($plat3);
        $manager->persist($detail4);

        $detail5= new Detail();
        $detail5->setQuantite(1);
        $detail5->setPlat($plat6);
        $manager->persist($detail5);

        $detail6= new Detail();
        $detail6->setQuantite(4);
        $detail6->setPlat($plat2);
        $manager->persist($detail6);

        $detail7= new Detail();
        $detail7->setQuantite(4);
        $detail7->setPlat($plat8);
        $manager->persist($detail7);

        $commande1 = new Commande();
            $commande1->setDateCommande(new \DateTimeImmutable('2020-11-30 03:52:43'))
                  ->setTotal(16)
                  ->setEtat(3)
                  ->addDetail($detail1);
            $manager->persist($commande1);

            $commande2 = new Commande();
            $commande2->setDateCommande(new \DateTimeImmutable('2020-11-30 04:07:17'))
                  ->setTotal(20)
                  ->setEtat(3)
                  ->addDetail($detail2);
            $manager->persist($commande2);

            $commande3 = new Commande();
            $commande3->setDateCommande(new \DateTimeImmutable('2021-05-04 01:35:34'))
                  ->setTotal(10)
                  ->setEtat(3)
                  ->addDetail($detail3);
            $manager->persist($commande3);

            $commande4 = new Commande();
            $commande4->setDateCommande(new \DateTimeImmutable('2021-07-20 06:10:37'))
                  ->setTotal(7)
                  ->setEtat(3)
                  ->addDetail($detail4);
            $manager->persist($commande4);

            $commande5 = new Commande();
            $commande5->setDateCommande(new \DateTimeImmutable('2021-07-20 06:40:21'))
                  ->setTotal(8)
                  ->setEtat(2)
                  ->addDetail($detail5);
            $manager->persist($commande5);

            $commande6 = new Commande();
            $commande6->setDateCommande(new \DateTimeImmutable('2021-07-20 06:40:57'))
                  ->setTotal(6)
                  ->setEtat(1)
                  ->addDetail($detail6);
            $manager->persist($commande6);

            $commande7 = new Commande();
            $commande7->setDateCommande(new \DateTimeImmutable('2021-07-20 07:06:06'))
                  ->setTotal(20)
                  ->setEtat(4)
                  ->addDetail($detail7);
            $manager->persist($commande7);

            
            $user = new User();
            $user->setNom('Administrateur')
                  ->setPrenom('theDistrict')
                  ->setEmail('admin@thedistrict.com')
                  ->setTelephone('')
                  ->setPassword(password_hash('password', PASSWORD_DEFAULT))
                  ->setRoles(['ROLE_ADMIN','ROLE_USER']);
            $manager->persist($user);

            $user1 = new User();
            $user1->setNom('Kelly')
                  ->setPrenom('Dillard')
                  ->setEmail('kelly@gmail.com')
                  ->setTelephone('7896547800')
                  ->addCommande($commande1)
                  ->setPassword(password_hash('password', PASSWORD_DEFAULT))
                  ->setRoles(['ROLE_USER']);
            $manager->persist($user1);

            $user2 = new User();
            $user2->setNom('Thomas')
                  ->setPrenom('Gilchrist')
                  ->setEmail('thom@gmail.com')
                  ->setTelephone('7410001450')
                  ->addCommande($commande2)
                  ->setPassword(password_hash('password', PASSWORD_DEFAULT))
                  ->setRoles(['ROLE_USER']);
            $manager->persist($user2);

            $user3 = new User();
            $user3->setNom('Martha')
                  ->setPrenom('Woods')
                  ->setEmail('martha@gmail.com')
                  ->setTelephone('78540001200')
                  ->addCommande($commande3)
                  ->setPassword(password_hash('password', PASSWORD_DEFAULT))
                  ->setRoles(['ROLE_USER']);
            $manager->persist($user3);

            $user4 = new User();
            $user4->setNom('Charlie')
                  ->setPrenom('Dupont')
                  ->setEmail('charlie@gmail.com')
                  ->setTelephone('7458965550')
                  ->addCommande($commande4)
                  ->setPassword(password_hash('password', PASSWORD_DEFAULT))
                  ->setRoles(['ROLE_USER']);
            $manager->persist($user4);

            $user5 = new User();
            $user5->setNom('Claudia')
                  ->setPrenom('Hedley')
                  ->setEmail('hedley@gmail.com')
                  ->setTelephone('7451114400')
                  ->addCommande($commande5)
                  ->setPassword(password_hash('password', PASSWORD_DEFAULT))
                  ->setRoles(['ROLE_USER']);
            $manager->persist($user5);

            $user6 = new User();
            $user6->setNom('Vernon')
                  ->setPrenom('Vargas')
                  ->setEmail('vonno@gmail.com')
                  ->setTelephone('7414744440')
                  ->addCommande($commande6)
                  ->setPassword(password_hash('password', PASSWORD_DEFAULT))
                  ->setRoles(['ROLE_USER']);
            $manager->persist($user6);

            $user7 = new User();
            $user7->setNom('Carlos')
                  ->setPrenom('Grayson')
                  ->setEmail('carlos@gmail.com')
                  ->setTelephone('7401456980')
                  ->addCommande($commande7)
                  ->setPassword(password_hash('password', PASSWORD_DEFAULT))
                  ->setRoles(['ROLE_USER']);
            $manager->persist($user7);

             



        $manager->flush();
    }
}
