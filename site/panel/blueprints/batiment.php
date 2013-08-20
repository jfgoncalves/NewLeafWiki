<?php if(!defined('KIRBY')) exit ?>

# batiment blueprint

title: Batiment
pages: false
files: true
fields:
  title: 
    label: Nom du batiment
    type: text
  english: 
    label: Nom Anglais
    type: text
  proprio:
    label: Tenu par
    type: text
  location:
    label: Localisation
    type: text
  timestart: 
    label: Heures d'ouverture
    help: Indiquer les heures d'ouverture normales / Exemple = 8h pour 8h / Laisser vide si pas de fermeture
    type: text
  timeend:
    label: Heures de fermeture
    help: Indiquer les heures de fermeture normales / Exemple = 21h pour 21h / Laisser vide si pas de fermeture
    type: text
  issell:
    label: Est-ce un commerce ?
    type: radio
    options:
      oui: Oui
      non: Non
  sell:
    label: Vend
    type: textarea
    size: medium
    help: Laisser vide si ce n'est pas un commerce / Exemple = 1x Chanson KéKé; 3x Papier
  text: 
    label: Description
    type:  textarea
    size:  large
filefields:
  caption:
    label: Légende
    type: text
  featured:
    label: Mise en avant (Écrire 'oui' pour passer ce fichier en mise en avant)
    type: text
  gallery:
    label: Mise en gallerie (Écrire 'oui' pour inclure ce fichier dans la gallerie)
    type: text