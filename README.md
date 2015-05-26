Platforme de notes de frais
===========================
Bienvenue sur mon projet de platform de note de frais. 
Ce projet était un sujet proposé par l'ecole CESI de Nantes.
Elle faite avec symfony2 et Bootstrap.

Technologie utilisé :
---------------------
	-	Langage : PHP 5.5
	-	Serveur Local : Wamp
	-	Base de données : MySql
	-	Framework : Symfony2
	-	Framework graphique : Bootstrap Twitter

1) Les besoins du projet
-------------------------

Projet uniquement en PHP. 
Fonctionnalités obligatoires de l'application:
* Export d'un fichier Excel (excel 2007)
* Import d'un fichier Excel (excel 2007)
* Enregistrement des information du Excel dans la base de données.
* Mode administrateur
* Comparaison de montant
	
L'application contient 10 entités:
* Activities
* Categories
* SousCategories
* User
* Excel
* MontantCategorie
* MontantJour
* MontantSousCategorie
* MontantTotalJour
* MontantSemaine

2) Les fonctions
----------------

L'application comporte un mode utilisateur normal et mode administrateur.
L'administrateur peut accéder au fonctions d'un utilisateur normal.

Liste des fonctions :
**test

	

Mon symfony est configuré avec les bundles suivants:

  * Twig is the only configured template engine;

  * Doctrine ORM/DBAL is configured;

  * Swiftmailer is configured;

  * Annotations for everything are enabled.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * [**AsseticBundle**][12] - Adds support for Assetic, an asset processing
    library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities
	
  * [**DoctrineFixtureBundle**][14] Charger un ensemble de données dans la base
    avec Doctrine 

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  http://symfony.com/doc/2.4/book/installation.html
[2]:  http://getcomposer.org/
[3]:  http://symfony.com/download
[4]:  http://symfony.com/doc/2.4/quick_tour/the_big_picture.html
[5]:  http://symfony.com/doc/2.4/index.html
[6]:  http://symfony.com/doc/2.4/bundles/SensioFrameworkExtraBundle/index.html
[7]:  http://symfony.com/doc/2.4/book/doctrine.html
[8]:  http://symfony.com/doc/2.4/book/templating.html
[9]:  http://symfony.com/doc/2.4/book/security.html
[10]: http://symfony.com/doc/2.4/cookbook/email.html
[11]: http://symfony.com/doc/2.4/cookbook/logging/monolog.html
[12]: http://symfony.com/doc/2.4/cookbook/assetic/asset_management.html
[13]: http://symfony.com/doc/2.4/bundles/SensioGeneratorBundle/index.html
[14]: http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html