#!/bin/bash
# Définir la variable FIREBASE_CREDENTIALS_PATH avec le chemin dans le container
export FIREBASE_CREDENTIALS_PATH=/app/config/firebase/symfony07-firebase-adminsdk-fbsvc-7148aaa659.json

# Lancer la commande passée au container (ici Apache)
exec "$@"
