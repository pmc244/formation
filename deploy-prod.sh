#!/usr/bin/env bash
#mettre le site en maintenance
drush sset system.maintenance_mode 1

#recupérer le code
git pull origin main

# faire le build
composer install --no-dev

#mettre à jour la base de données
drush updb -y

#export des configs de prod
drush csex prod -y

#import des configs communes

drush cim -y

#vvider le cache
drush cr

#remettre le site en ligne
drush sset system.maintenance_mode 0
