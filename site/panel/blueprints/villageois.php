<?php if(!defined('KIRBY')) exit ?>

# Liste villageois

title: Liste Villageois
pages: true
  template: 
    - habitant
files: true
fields:
  title: 
    label: Titre
    type:  text
  text: 
    label: Texte
    type:  textarea
    size:  large
filefields:
  caption:
    label: Légende
    type: text
  featured:
    label: Mise en avant (Écrire 'oui' pour passer ce fichier en mise en avant)
    type: text