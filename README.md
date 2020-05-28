# php-workshop
## Installation de PHP
1. Télécharger la dérnière version stable de php (`PHP 7.4`) sous format ZIP
2. Extrayer le contenu du fichier ZIP dans `C:\PHP7`.
3. Créer une copie du fichier C:\PHP7\php.ini-development et renommez la en C:\PHP7\php.ini.
4. Ouvrer le fichier C:\PHP7\php.ini nouvellement copié dans un éditeur de texte, tel que Visual Studio Code.
5. Modifier `memory_limit` de 128M à 1G (pour tenir compte des besoins en mémoire de `Composer` lorsqu'on aura besoin).
6. Rechercher `extension_dir` et décommenter la ligne (supprimez le point-virgule de tête, pour que la ligne ressemble à `extension_dir = "ext"`).
7. Pour ajouter C:\PHP7 à la variable d'environnement du chemin système de Windows 10
8. Dans une invite de commande (PowerShell ou un autre terminal), vérifiez que l'installation est réussie en tapant `php -v`

## Enoncé 1 
Dans ce travail, nous apprendrons à utiliser le moteur de template intégré, le shell interactif de PHP, et à attribuer et utiliser des variables. À la fin, vous serez en mesure de le faire :

- Travailler avec le moteur de template intégré de PHP
- Exécuter un script PHP en ligne de commande
- Créer et attribuer des variables pour imprimer des messages simples sur le navigateur web
- Exécutez le serveur web intégré de PHP sur votre machine

1. Créez un fichier nommé `movies.php`.
2. Saisissez les données de la chaîne de requête dans le fichier pour stocker les détails des films, tels que les noms des films, les noms des acteurs/actrices et l'année de sortie.
3. Créez une structure HTML de base et affichez ensuite les chaînes de requête (`query string`) capturées.
4. Allez au terminal et exécutez la commande pour démarrer le serveur web intégré (Exécutez la commande suivante pour faire fonctionner le serveur web intégré de PHP : `php -S localhost:8085`).
5. Une fois le serveur web en marche, ouvrez la page PHP et ajoutez vos chaînes de requête à l'URL dans votre navigateur. La sortie attendue est illustrée dans la figure `enoncé1-sortie.png`.
- Documentez vous sur l'utilisation des variables prédéfies (`super globales`, `$_GET`) pour extraire les chaînes de requêtes (`query string`) que vous allez saisir dans l'`URL`.

## Enoncé 2
À la fin de cet enoncé, vous pourrez :
- Utiliser les différents types de données dans PHP pour stocker et travailler avec les données
- Créer et utiliser des tableaux
- Mettre en œuvre le concept de tableaux multidimensionnels
- Travailler avec les opérateurs pour évaluer la valeur des opérations
- Effectuer un casting de pour convertir les variables d'un type à l'autre

Supposons que vous décidiez un jour de surveiller votre santé, mais que vous ne vouliez pas utiliser un outil tiers. Vous pourriez construire un outil simple pour prendre des mesures, notamment le nom, le poids et la taille. À partir de là, vous pouvez calculer votre `IMC`.

Dans cette activité, vous écrirez un script qui prendra des variables du script afin d'effectuer des calculs pour obtenir un résultat d'IMC. Vous définirez un certain nombre de valeurs par défaut, mais vous construirez également une option pour spécifier vos propres données via des chaînes de requête.

Voici les étapes à suivre pour réaliser l'activité :

1. Créer un fichier `tracker.php`.
2. Définir une chaîne `$name` pour stocker le nom de l'utilisateur.
3. Définir un entier `$weightKg` pour stocker le poids en kilogrammes.
4. Définir un entier `$heightCm` pour stocker la hauteur en centimètres.
5. Convertir la hauteur en mètres.
6. Calculer la valeur de la hauteur au carré.
7. Calculer l'IMC en divisant le poids de l'utilisateur par la valeur de la taille au carré.
8. Afficher un message à l'écran affichant le nom et le résultat de l'IMC.

## Enoncé 2
Dans cette activité, nous pratiquerons le looping imbriqué et appliquerons des conditions pour limiter les itérations des boucles intérieures et extérieures. Nous disposerons d'un tableau associatif multidimensionnel dans lequel le nom du réalisateur sert de clé pour contenir un tableau de noms de films. Ainsi, chaque élément du tableau associatif contient un nom de réalisateur comme clé et le tableau des noms de films comme valeur. Nous allons introduire une boucle extérieure pour faire une boucle à travers les éléments du tableau associatif et imprimer le nom du réalisateur, utilisé comme clé. Une autre boucle interne doit boucler le tableau des noms de films de ce réalisateur - c'est la clé. Les arguments agissent comme des étapes d'itération de boucle pour maintenir où le premier argument définit combien de fois le nom d'un réalisateur doit être imprimé et le second argument définit combien de noms de films doivent être imprimés à partir du réalisateur donné.
- Le tableau multidimensionnel contient cinq réalisateurs.
- Les étapes à effectuer sont les suivantes :
1. Créer le fichier script `activity-movies.php`, qui prend deux arguments, tous deux numériques : le premier argument sera utilisé pour le nombre de réalisateurs, et le second sera utilisé pour le nombre de films.
2. Ajouter `un tableau imbriqué` contenant une `liste` de cinq réalisateurs, chaque entrée contenant une liste de cinq titres de films.
3. En exécutant le script, imprimez la liste des réalisateurs et des titres de films, comme l'exigent les arguments d'entrée.
4. Si les arguments d'entrée ne sont pas passés, considérez alors la valeur par défaut de 5 pour les deux.
- Voici quelques exemples de résultats obtenus en exécutant le script php activity-movies.php:

Les films de Steven Spielberg :

> The Post

> Le pont des espions

Les films de Christopher Nolan :

> Dunkerque

> Quai

Les films de Martin Scorsese :

> Le Loup de Wall Street

> Hugo

