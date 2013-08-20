<?php if(!defined('KIRBY')) exit ?>

# Liste avec tableau

title: Liste des batiments
pages: true
  template: 
    - batiment
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