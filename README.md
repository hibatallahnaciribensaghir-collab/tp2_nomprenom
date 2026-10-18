# TP 02 PHP : Programmation Web 2 (2026/2027)

- **Nom :** Naciri Ben Saghir
- **Prénom :** Hibat-Allah
- **Groupe :** Grp1
- **Titre du TP :** TP 02 : PHP, variables, structures de contrôle, tableaux et formulaires

## Exécution

Depuis la racine du dépôt :

```bash
php -S localhost:8000
```

Puis ouvrir http://localhost:8000/index.php

## Liste des exercices

1. `ex01.php` : balises, echo, commentaires
2. `ex02.php` : variables, concaténation
3. `ex03.php` : constantes, calculs
4. `ex04.php` : types et conversions
5. `ex05.php` : conditions
6. `ex06.php` : switch
7. `ex07.php` : boucles for
8. `ex08.php` : while, do-while, break, continue
9. `ex09.php` : tableau associatif
10. `ex10_get.html/php` et `ex10_post.html/php` : formulaires GET et POST

## Réponses courtes

### Exercice 2
- `$note` et `$Note` sont deux variables différentes car PHP est sensible à la casse pour les noms de variables.
- Noms valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
- Noms invalides : `$a!` (le caractère `!` n'est pas autorisé) et `$1a` (un nom ne peut pas commencer par un chiffre).

### Exercice 4
Avec `echo`, `false` est converti en chaîne vide : rien n'est affiché. Avec `var_dump()`, on voit la valeur et son type : `bool(false)`.

### Exercice 5
| Valeur testée | Message |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

### Exercice 10
- **GET** : les valeurs apparaissent dans l'URL, après le `?` (par exemple `ex10_get.php?nom=...&prenom=...&groupe=G1`).
- **POST** : les valeurs sont envoyées dans le corps de la requête HTTP, l'URL reste `ex10_post.php` sans paramètres.
