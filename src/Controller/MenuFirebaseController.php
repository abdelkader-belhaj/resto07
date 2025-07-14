<?php
// src/Controller/MenuFirebaseController.php
namespace App\Controller;

use App\Service\FirebaseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CloudinaryUploader;

class MenuFirebaseController extends AbstractController
{
    #[Route('/menus', name: 'firebase_menu_index')]
    public function index(FirebaseService $firebase): Response
    {
        $menus = $firebase->getMenus();
        // Ensure each menu has a 'type' key to avoid Twig errors
        foreach ($menus as &$menu) {
            if (!array_key_exists('type', $menu)) {
                $menu['type'] = null;
            }
        }
        unset($menu); // break reference

        return $this->render('menuFirebase/index.html.twig', [
            'menus' => $menus
        ]);
    }

    #[Route('/menus/add', name: 'firebase_menu_add', methods: ['GET', 'POST'])]
    public function add(Request $request, FirebaseService $firebase, CloudinaryUploader $cloudinary): Response
    {
        if ($request->isMethod('POST')) {
            $imageFile = $request->files->get('image');
            $imageUrl = null;
            if ($imageFile) {
                $imagePath = $imageFile->getPathname();
                $imageUrl = $cloudinary->uploadImage($imagePath);
            }
            $data = [
                'titre' => $request->request->get('titre'),
                'description' => $request->request->get('description'),
                'image' => $imageUrl,
                'type' => $request->request->get('type'), // Ajout du champ type
            ];
            $firebase->createMenu($data);
            $this->addFlash('success', 'Menu ajouté avec succès !');
            return $this->redirectToRoute('firebase_menu_index');
        }
        $types = ['Petit déjeuner', 'Déjeuner', 'Dîner', 'Collation', 'Brunch'];
        return $this->render('menuFirebase/add.html.twig', [
            'types' => $types
        ]);
    }

    #[Route('/menus/edit/{key}', name: 'firebase_menu_edit', methods: ['GET', 'POST'])]
    public function edit(string $key, Request $request, FirebaseService $firebase, CloudinaryUploader $cloudinary): Response
    {
        $menu = $firebase->getMenu($key);
        if (!$menu) {
            $this->addFlash('error', 'Menu non trouvé.');
            return $this->redirectToRoute('firebase_menu_index');
        }

        if ($request->isMethod('POST')) {
            $imageFile = $request->files->get('image');
            $imageUrl = $menu['image']; // Garder l'ancienne image par défaut
            
            if ($imageFile) {
                $imagePath = $imageFile->getPathname();
                $imageUrl = $cloudinary->uploadImage($imagePath);
            }

            $data = [
                'titre' => $request->request->get('titre'),
                'description' => $request->request->get('description'),
                'image' => $imageUrl,
                'type' => $request->request->get('type'), // Ajout du champ type
            ];
            
            $firebase->updateMenu($key, $data);
            $this->addFlash('success', 'Menu modifié avec succès !');
            return $this->redirectToRoute('firebase_menu_index');
        }

        $types = ['Petit déjeuner', 'Déjeuner', 'Dîner', 'Collation', 'Brunch'];
        return $this->render('menuFirebase/edit.html.twig', [
            'menu' => $menu,
            'key' => $key,
            'types' => $types
        ]);
    }

    #[Route('/menus/delete/{key}', name: 'firebase_menu_delete', methods: ['POST'])]
    public function delete(string $key, FirebaseService $firebase): Response
    {
        $menu = $firebase->getMenu($key);
        if (!$menu) {
            $this->addFlash('error', 'Menu non trouvé.');
            return $this->redirectToRoute('firebase_menu_index');
        }

        $firebase->deleteMenu($key);
        $this->addFlash('success', 'Menu supprimé avec succès !');
        return $this->redirectToRoute('firebase_menu_index');
    }
}