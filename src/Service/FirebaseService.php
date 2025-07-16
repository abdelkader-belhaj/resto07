<?php


namespace App\Service;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;

class FirebaseService
{
    private Database $database;

    public function __construct()
    {
        // Lire la clé JSON depuis la variable d'environnement
        $credentialsJson = getenv('FIREBASE_CREDENTIALS');
        if (!$credentialsJson) {
            throw new \RuntimeException('FIREBASE_CREDENTIALS is not set.');
        }

        // L’écrire temporairement dans un fichier
        $tempFile = sys_get_temp_dir() . '/firebase_credentials.json';
        file_put_contents($tempFile, $credentialsJson);

        // Lire l'URL de la base de données
        $databaseUrl = getenv('FIREBASE_DATABASE_URL');
        if (!$databaseUrl) {
            throw new \RuntimeException('FIREBASE_DATABASE_URL is not set.');
        }

        // Créer l’usine Firebase
        $factory = (new Factory)
            ->withServiceAccount($tempFile)
            ->withDatabaseUri($databaseUrl);

        $this->database = $factory->createDatabase();
    }
    public function getDatabase(): Database
    {
        return $this->database;
    }

    // --------------------------
    // 🎯 MENUS
    // --------------------------

    public function createMenu(array $data): void
    {
        $this->database->getReference('menus')->push($data);
    }

    public function getAllMenus(): array
    {
        return $this->database->getReference('menus')->getValue() ?? [];
    }

    public function getMenu(string $key): ?array
    {
        return $this->database->getReference("menus/{$key}")->getValue();
    }

    public function updateMenu(string $key, array $data): void
    {
        $this->database->getReference("menus/{$key}")->update($data);
    }

    public function deleteMenu(string $key): void
    {
        $this->database->getReference("menus/{$key}")->remove();
    }

    public function getMenus(): array
    {
        return $this->database->getReference('menus')->getValue() ?? [];
    }

    // --------------------------
    // 🆕 SPECIALS
    // --------------------------

    public function createSpecial(array $data): void
    {
        $this->database->getReference('specials')->push($data);
    }

    public function getAllSpecials(): array
    {
        return $this->database->getReference('specials')->getValue() ?? [];
    }

    public function getSpecial(string $key): ?array
    {
        return $this->database->getReference("specials/{$key}")->getValue();
    }

    public function updateSpecial(string $key, array $data): void
    {
        $this->database->getReference("specials/{$key}")->update($data);
    }

    public function deleteSpecial(string $key): void
    {
        $this->database->getReference("specials/{$key}")->remove();
    }



    // --------------------------
// 🍽️ TABLES
// --------------------------

public function createTable(array $data): void
{
    $this->database->getReference('tables')->push($data);
}

public function getAllTables(): array
{
    return $this->database->getReference('tables')->getValue() ?? [];
}

public function getTable(string $key): ?array
{
    return $this->database->getReference("tables/{$key}")->getValue();
}

public function updateTable(string $key, array $data): void
{
    $this->database->getReference("tables/{$key}")->update($data);
}

public function deleteTable(string $key): void
{
    $this->database->getReference("tables/{$key}")->remove();
}




 // --------------------------
    // 👨‍🍳 CHEFS
    // --------------------------
    public function createChef(array $data): void
    {
        $this->database->getReference('chefs')->push($data);
    }

    public function getAllChefs(): array
    {
        return $this->database->getReference('chefs')->getValue() ?? [];
    }

    public function getChef(string $key): ?array
    {
        return $this->database->getReference("chefs/{$key}")->getValue();
    }

    public function updateChef(string $key, array $data): void
    {
        $this->database->getReference("chefs/{$key}")->update($data);
    }

    public function deleteChef(string $key): void
    {
        $this->database->getReference("chefs/{$key}")->remove();
    }

    // --------------------------
    // 📩 CONTACTS
    // --------------------------
    public function createContact(array $data): void
    {
        $this->database->getReference('contacts')->push($data);
    }

    public function getAllContacts(): array
    {
        return $this->database->getReference('contacts')->getValue() ?? [];
    }

    public function getContact(string $key): ?array
    {
        return $this->database->getReference("contacts/{$key}")->getValue();
    }

    public function updateContact(string $key, array $data): void
    {
        $this->database->getReference("contacts/{$key}")->update($data);
    }

    public function deleteContact(string $key): void
    {
        $this->database->getReference("contacts/{$key}")->remove();
    }

    
    // --------------------------
    // 🖼️ GALLERY
    // --------------------------
    public function createGallery(array $data): void
    {
        $this->database->getReference('galleries')->push($data);
    }

    public function getAllGalleries(): array
    {
        return $this->database->getReference('galleries')->getValue() ?? [];
    }

    public function getGallery(string $key): ?array
    {
        return $this->database->getReference("galleries/{$key}")->getValue();
    }

    public function updateGallery(string $key, array $data): void
    {
        $this->database->getReference("galleries/{$key}")->update($data);
    }

    public function deleteGallery(string $key): void
    {
        $this->database->getReference("galleries/{$key}")->remove();
    }





// --------------------------
// 🎉 PARTTIES
// --------------------------
public function createParttie(array $data): void
{
    $this->database->getReference('partties')->push($data);
}

public function getAllPartties(): array
{
    return $this->database->getReference('partties')->getValue() ?? [];
}

public function getParttie(string $key): ?array
{
    return $this->database->getReference("partties/{$key}")->getValue();
}

public function updateParttie(string $key, array $data): void
{
    $this->database->getReference("partties/{$key}")->update($data);
}

public function deleteParttie(string $key): void
{
    $this->database->getReference("partties/{$key}")->remove();
}





   
}





