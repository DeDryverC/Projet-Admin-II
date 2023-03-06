# Projet-Admin-II
Repo du projet admin 2 ephec
# Analyse Web : 
## Besoin technique :
Le client a besoin de stocker 3 services web:
1. Un portail Web public afin d'afficher et présenter les produit commercialisé par WoodyToys,
2. Un site de vente en ligne type utilisateur portail réservé aux vendeurs.
3. Un ERP qui servira pour la gestion interne de l'entreprise, notamment pour numériser la comptabilité, les ressources humaine, la gestion de stock etc.

Il faut trouver une solution pour stocker et permettre soit aux employé ou aux personnes extérieur d'accéder aux différents sites selon leurs permissions. Il faut choisir un serveur et une technologie adapté a leurs besoin et optimisé.

Il faut donc trouver et installer un serveur qui va gérer la mise en place des sites web avec le software pour l'ERP, ainsi qu'un protocole et un proxy qui permettra au site d'être sécurisé. Ensuite, on va devoir configurer un serveur web ainsi que le proxy.

## Solution possible : 
### Choix du serveur : 
* Utilisation d'un serveur Apache : 
> Apache peut être combiné avec MySQL et PHP, ce qui simplifierait l'implémentation avec le site revendeur et l'intranet, de plus il est pré-installé sur les machines Linux (Red Hat/Centos et Ubuntu) + Open Source. Grande flexibilité sur la configuration. Prend en charge les scripts .aspx . Bonne architecture de serveur Web (par rapport a IIS), dispose d'une meilleure sécurité.
* Utilisation d'un serveur Nginx : 
> Nginx a de meilleurs performances que Apache, meilleure croissance en terme d'utilisation, mais moins configurable qu'Apache, n'est pas parfait dans des environnements partagés.
* Utilisation d'un serveur IIS-Windows:
> Fonctionne mieux sur Windows, Payant (nécessite une licence Windows), exclusivité sur ASP(x) : Active Server Page (framework), dispose d'un personnel dédié a la résolution des problème,
### Choix du protocole :
* protocole HTTPS :
> HTTPS est l'un des protocole les plus utilisé et fiable.

### Choix du Proxy : 
* Proxy HTTP : 
> Couche de sécurité supplémentaire, Permet de réguler l'accès a des sites qui ne sont pas utile pour le travail. Eviter le fichier de log.
* Proxy transparent:
> Proxy situé entre les PCs et le modem routeur, permet d'avoir une trace complète des données, pas l'idéal niveau vie privé.
* Cache proxy:
> Permet de garder en mémoire les serveurs récemment visitée, et permet une économie de la bande passante.
* Serveur proxy FTP:
> Même chose que pour le proxy HTTP sauf que lui va s'occuper des protocoles FTP (upload, download...)
* Reverse Proxy : 
> Améliore la sécurité du réseau web, ainsi que les performances et la fiabilité. S'occupe des données entrantes, il va router les différentes demandes entrante sur le bon serveur, il a de plus une fonction serveur cache aux connections entrante (pratique si on héberge un site web sur le réseau).



## Solution choisie :
### Serveur Apache HTTPS.
Notre client utilise MySQL, PHP donc même si Nginx est plus rapide, il est préférable de choisir un outil avec une meilleure compatibilité avec les technologies déjà en place. Nous allons donc choisir Apache car il est utilisé sur système Linux donc une licence gratuite qui permettrais de ne pas acheter de licence Windows dans le cas ou nous utiliserons IIS, et par rapport a Nginx, Apache a plus d'avantage sur Linux la ou Nginx a un peu de retard.
Nous allons utiliser un reverse proxy car, premièrement il y a un avantage car nous allons mettre en place un site web qui passera dans les serveurs de l'entreprise, et grâce au cache du reverse proxy, les utilisateurs de ses sites web auront plus de facilité a se connecter rapidement aux sites. De plus, nous allons avoir plusieurs type de services et serveurs, il va falloir bien "router" toutes les données entrante, et le reverse proxy permet de mettre cela en place.

### Mise en place de la solution : 
* Installation d'Apache.
* Donner les droit a l'utilisateur www-data qui vient d'être crée.
* Vérifier le status du serveur
* Configurer le serveur. /etc/apache2/
1. mods-enabled
2. conf-enabled
3. sites-enabled
* Faire des configurations pour les 3 sites

**Si utilisation de PHP** :
* Mettre a jour le cache d'entrepôt
* Ajouter SURY. ( package PHP)
* Remettre a jour le cache.
* Installer PHP
* Installer les modules apache-php
* Verifier / activer le module php
* Relancer le serveur Apache.
* Editer la page php /var/www/html/

**Mise en place du Proxy** :
* Avoir Apache,
* Activer les 2 modules proxy et proxy_http
* Redémarrer apache.
* Créer un virtualHost
* Le configurer en reverse proxy
* Activer et redemarrer Apache.

Sécurité : 
Mise en place d'un reverse Proxy

***

|Serveurs|Apache|Nginx|IIS-Windows|  
|--------|------|-----|-----------|
| 

## Sources:
* https://kinsta.com/fr/blog/nginx-vs-apache/
* https://waytolearnx.com/2018/12/difference-entre-iis-et-apache.html
* https://le-routeur-wifi.com/types-serveurs-proxy/
* https://digitalboxweb.wordpress.com/2020/03/14/mettre-en-place-apache2-sur-son-vps/
* https://perhonen.fr/blog/2015/05/un-reverse-proxy-apache-avec-mod_proxy-1713#:~:text=Pour%20utiliser%20Apache%20en%20mode,proxy_http%20via%20la%20commande%20a2enmod%20.&text=Le%20module%20proxy%20permet%20l,et%20HTTPS%20au%20module%20proxy%20.
