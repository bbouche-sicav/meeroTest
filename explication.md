- installation via skeleton projet SF
- mise en place repository git
- creation branche feature/order pour nouveau dev (best practice GIT)
- creation de l'app Order
- configuration de l'environnement de dev (db notamment)
- creation base de données et entité via php bin/console doctrine:XXXXX
===> 3 tables créés : order / product / join_order_product
- debut dev page d'ajout de commande
===> creation controller Order et Vue twig associée
===> creation formulaire via formBuilder() avec données péenregistrée
===> recuperation et traitement des données pour ajout en base
- merge feature/order sur master (normalement dev -> staging -> master best practice GIT)
