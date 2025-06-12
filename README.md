# Projet YEKOLA

[![main.yml](https://github.com/Stunt-Business/yekola/actions/workflows/main.yml/badge.svg)](https://github.com/Stunt-Business/yekola/actions/workflows/main.yml)

<div style="display: flex; flex-direction:row">
    <a target="_new" 
         href="https://www.linkedin.com/company/stunt-business/">
        <img src="./stuntbusiness-logo.png" alt="drawing" width="200"/>
    </a>
    <a target="_new" 
         href="https://www.linkedin.com/company/club-gei-polytech/posts/?feedView=all">
        <img src="./GEI.png" alt="drawing" width="200"/>
    </a>
</div>

Yekola est un projet OpenSource visant le territoire Congolais.  Ce projet a été initié par **Stunt Business Inc.** en collaboration avec les étudiants du Groupe de **Génie Électrique et Informatique de l'Université de Kinshasa**. 

Notre prémière rencontre a eu lieu le Vendredi **30 mai 2025** et le début des travaux est fixé du **15 juin 2025** au **15 juin 2026**. 

- Lien de la présentation: https://drive.google.com/file/d/1Omscz11EZzk-PGF-Gk4oMIWr3I8n3M_6/view?usp=sharing
- Vidéo de la présentation: https://www.youtube.com/watch?v=DmNnu2_RSMg

# Pile technologique

L'application est développé avec les technologies suivantes:

- Laravel pour le backend: https://laravel.com/
- VueJs pour le frontend: https://vuejs.org/guide/scaling-up/testing.html
- InertiaJs pour le frontend: https://inertiajs.com/
- Github pour le système de controle des versions: https://github.com/
- Tailwind CSS pour le frontend: http://tailwindcss.com/

# Horaire de l'implémentation

Le cycle de développement logiciel est suivi pour ce projet. 

### Planification

| Date   | Description |
| -------- | --------- |
| 15 juin 2025 - 21 juin 2025 | Finalisation des exigences fonctionnelles et non fonctionnelles |
| 22 juin 2025 - 15 décembre 2025 | Développement des exigences du produit minimum viable  (MVP) |


### Design

| Date   | Description |
| -------- | --------- |
| 22 juin 2025 - 22 juillet 2025 |  Désign de la base des données pour l'application |
| 22 juin 2025 - 30 juin 2025  |  Développement de l'interface utilisateur ainsi pour chaque module de l'application |

### Implémentation

| Date   | Description |
| -------- | --------- |
| 22 juin 2025 - 15 décembre 2025 | Développement des exigences du produit minimum viable  (MVP) |

### Test

| Date   | Description |
| -------- | --------- |
| 1 décembre 2025 - 15 décembre 2025 |  Développement de l'interface utilisateur ainsi pour chaque module de l'application |

### Déploiement

| Date   | Description |
| -------- | --------- |
| 15 décembre 2025 - 31 décembre 2025 | Déploiement du MVP sur le domaine .cd |
| 15 juin 2026 - 30 juin 2026 | Déploiement du MVP sur le domaine .cd |

# Horaire des rencontres en vidéoconférence 

| Date   | Google Meet |
| -------- | --------- |
|Lundi 20h (Heure de Kinshasa) - 15h (Heure d'Ottawa)| To join the video meeting, click this link: https://meet.google.com/xjo-zpah-stn|
|Mercredi 20h (Heure de Kinshasa) - 15h (Heure d'Ottawa)| To join the video meeting, click this link: https://meet.google.com/xjo-zpah-stn |
|Vendredi 20h (Heure de Kinshasa) - 15h (Heure d'Ottawa)| To join the video meeting, click this link: https://meet.google.com/xjo-zpah-stn|
# Contact

Les responsables de ce projet peuvent etre contactés aux adresses suivantes:

- **Benjamin Viranga Kataliko**: benjamin.kataliko@stuntbusiness.ca, Stunt Business Inc. 
- **Daniel Mabanza**: mrdanielmabanza@gmail.com 

Veuillez s'il vous plait mettre en CC les contacts suivants lorsque vous nous contactez: 

- Le docteur Jean-Marie Mbeya (jean-marie.beya@unikin.ac.cd)  
- Le docteur Haddy Mbuyi (haddy.mbuyi@unikin.ac.cd) 


# Communauté

La communauté du projet YEKOLA est disponible sous Google Chat.

> https://chat.google.com/room/AAQAiUYBUx8?cls=7

N'hésitez pas à rejoindre la conversation pour créer ce logiciel.

> email : yekola@stuntbusiness.ca

# Comment contribuer au projet?

Veuillez suivre les instructions disponibles dans le document ci-dessous:

- [Voir la présentation sur Google Slides](https://docs.google.com/presentation/d/1BxnCPTlpnfwqwS0KrWifszgpK4NMnncyCbZcr69mjCU/edit?usp=sharing)


# Comprendre les modules du projet

Le module de l'application web sont disponible dans le diagramme suivant:

- URL: [Voir les modules sur LucidChart](https://lucid.app/lucidchart/08951c1b-bcf3-47e6-9b68-8d97a0684ba1/edit?viewport_loc=-11%2C-11%2C2217%2C1076%2C0_0&invitationId=inv_e7639cad-9c4f-462b-827c-5bcbacaf8eef)


# Comment configurer votre environnement locale?

- Cloner le dossier Github avec la commande:

> git clone https://github.com/Stunt-Business/yekola.git

* Une fois le dossier téléchargé, vous pouvez récupérer les mises à jour avec la commande suivante:

> git pull origin main

* Exécuter l'installation de _composer_

> composer install --ignore-platform-req=ext-bcmath

* Installer les packages nodejs

> npm install

* Générer une clé d'application pour votre environnement local

> php artisan key:generate

* Ouvrez le bureau Docker et lancez Laravel Sail avec la commande suivante:

> ./vendor/bin/sail up -d