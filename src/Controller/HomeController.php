<?php

// src/Controller/HomeController.php

namespace App\Controller;

use App\Service\FirebaseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home/menu', name: 'app_menus_home')]
    public function show(FirebaseService $firebase): Response
    {
        $menus = $firebase->getMenus();
        $types = [];

        foreach ($menus as &$menu) {
            if (!isset($menu['type']) || $menu['type'] === null) {
                $menu['type'] = '';
            } else {
                $menu['type'] = 'filter-' . strtolower(trim($menu['type']));
                $types[] = $menu['type'];
            }
        }
        unset($menu);
        $types = array_unique($types);

        return $this->render('menuFirebase/showw.html.twig', [
            'menus' => $menus,
            'types' => $types
        ]);
    }

    #[Route('/', name: 'front_index', methods: ['GET', 'POST'])]
    public function index(Request $request, FirebaseService $firebase): Response
    {
        // Formulaire de réservation soumis
        if ($request->isMethod('POST')) {
            $data = [
                'name' => $request->request->get('name'),
                'email' => $request->request->get('email'),
                'tel' => $request->request->get('phone'),
                'date' => $request->request->get('date'),
                'time' => $request->request->get('time'),
                'numberPeople' => $request->request->get('people'),
                'message' => $request->request->get('message'),

               
    'subject' => $request->request->get('subject'),


            ];

            $firebase->createTable($data);
            $this->addFlash('success', 'Votre réservation a été enregistrée avec succès !');
            return $this->redirectToRoute('front_index');
        }

        // Affichage menus et specials
        $menus = $firebase->getMenus();
        $specials = $firebase->getAllSpecials();
        $chefs = $firebase->getAllChefs(); 
        $contacts = $firebase->getAllContacts();
        $galleries = $firebase->getAllGalleries();
        $partties = $firebase->getAllPartties();



        $types = [];

        foreach ($menus as &$menu) {
            if (!isset($menu['type']) || $menu['type'] === null) {
                $menu['type'] = '';
            } else {
                $menu['type'] = 'filter-' . strtolower(trim($menu['type']));
                $types[] = $menu['type'];
            }
        }
        unset($menu);
        $types = array_unique($types);

        return $this->render('front/front.html.twig', [
            'menus' => $menus,
            'types' => $types,
            'specials' => $specials,
            'chefs' => $chefs,
            'contacts' => $contacts,
            'galleries' => $galleries,
            'partties' => $partties,
        ]);
    }
}
