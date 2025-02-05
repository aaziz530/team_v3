<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Medecin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/api/admin', name: 'admin_')]
class AdminController extends AbstractController
{
    #[Route('/create-medecin', name: 'create_medecin', methods: ['POST'])]
    public function createMedecin(Request $request, UserPasswordHasherInterface $passwordHasher, ManagerRegistry $doctrine): JsonResponse
    {
        $em = $doctrine->getManager();
        $data = json_decode($request->getContent(), true);

        $email = $data['email'];
        $password = $data['password'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $birthdate = new \DateTime($data['birthdate']);
        $specialite = $data['specialite'];
        $phone_number = $data['phone_number'];

        // Créer l'utilisateur
        $user = new User();
        $user->setEmail($email);
        $user->setUsername($email);
        $hashedPassword = $passwordHasher->hashPassword($user, $password);
        $user->setPassword($hashedPassword);
        $user->setRoles(['ROLE_MEDECIN']);

        // Créer le médecin
        $medecin = new Medecin();
        $medecin->setFirstname($firstname);
        $medecin->setLastname($lastname);
        $medecin->setBirthdate($birthdate);
        $medecin->setSpecialite($specialite);
        $medecin->setPhoneNumber($phone_number);
        $medecin->setUser($user);  // Lier le médecin à l'utilisateur

        // Sauvegarder l'utilisateur et le médecin
        $em->persist($user);
        $em->persist($medecin);
        $em->flush();

        return $this->json(['message' => 'Médecin créé avec succès']);
    }

    // Autres méthodes pour créer d'autres rôles (entraineur, président, etc.)
}