# exemple-controller-frontal
Exemple d'un contrôleur frontal pour votre site portfolio

## Etape 1
Créer votre repository sur github en public.

Clonez celui-ci sur votre machine.

Entrez dans le référenciel sur la branche par défaut : `main`

## Etape 2
Créez des branches par grandes étapes, et surtout faites régulièrement des sauvegardes (commit)

    git checkout -b NomDeMaBranche
    git add .
    git commit -m"Mon message"
    ...
    git push origin NomDeMaBranche

Puis effectuer un pull request sur la `main` sur github, ensuite le valider et retourner sur la `main` en local et faire

    git checkout main
    git pull origin main

et puis création d'une nouvelle branche et ainsi de suite....

## Etape 3
Création du contrôleur frontal nommé `index.php`

## Etape 4
Création d'un `.gitignore` pour rendre invisible `config.php` avant même sa création !

## Etape 5
Création du véritable config.php
