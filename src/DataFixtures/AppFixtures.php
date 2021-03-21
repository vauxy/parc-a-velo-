<?php

namespace App\DataFixtures;

use App\Entity\Entre;
use App\Entity\Eleve;
use App\Entity\Sortie;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Date;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder =$passwordEncoder;
    }
    public function load(ObjectManager $manager )
    {
        // Création d'un utilisateur Admin
        $admin = new User();
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setEmail('admin@admin.com');
        $admin->setPassword(
            $this->passwordEncoder->encodePassword(
                $admin,
                'Admin123'
            )
        );
        $manager->persist($admin);
        $manager->flush();

        // Création de plusieurs eleves
        $eleveUn = new Eleve();
        $eleveUn->setNom('admin');
        $eleveUn->setPrenom('admin');
        $eleveUn->setClasse('BTS2');
        $eleveUn->setImage('image.png');
        $eleveUn->setCodeBarre( '25389575');
        $eleveUn->setCodeRFID('admin@admin.com');
        $manager->persist($eleveUn);
        $manager->flush();

        $eleveDeux = new Eleve();
        $eleveDeux->setNom('Grandvaux ');
        $eleveDeux->setPrenom('Simon');
        $eleveDeux->setClasse('BTSSIO1');
        $eleveDeux->setImage('image.png');
        $eleveDeux->setCodeBarre( '954389575');
        $eleveDeux->setCodeRFID('simon@admin.com');
        $manager->persist($eleveDeux);
        $manager->flush();

        $eleve = new Eleve();
        $eleve->setNom('Kozuki');
        $eleve->setPrenom('Oden');
        $eleve->setClasse('TS2');
        $eleve->setImage('image.png');
        $eleve->setCodeBarre( '6958256358');
        $eleve->setCodeRFID('wano@admin.com');
        $manager->persist($eleve);
        $manager->flush();

        // Création de mes entrés
        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/2020'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveUn);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/01/2021'));
        $entre->setVelo(false);
        $entre->setRefus(false);
        $entre->setEleve($eleveDeux);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('11/03/2021'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleve);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('01/11/1997'));
        $entre->setVelo(true);
        $entre->setRefus(false);
        $entre->setEleve($eleveUn);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('02/26/2021'));
        $entre->setVelo(false);
        $entre->setRefus(false);
        $entre->setEleve($eleveUn);
        $manager->persist($entre);
        $manager->flush();

        $entre = new Entre();
        $entre->setDate(new \DateTime('05/03/2021'));
        $entre->setVelo(true);
        $entre->setRefus(true);
        $entre->setEleve($eleveDeux);
        $manager->persist($entre);
        $manager->flush();

        // Création de mes entrés
        $sortie = new Sortie();
        $sortie->setDate(new \DateTime('03/11/2020'));
        $sortie->setVelo(true);
        $sortie->setEleve($eleveUn);
        $sortie->setRefus(true);
        $sortie->setCodeRfidRefus('25655655655');
        $manager->persist($sortie);
        $manager->flush();

    }


}
