<?php if(!defined('KIRBY')) exit ?>

# Liste avec tableau

title: Liste tableau
pages: true
  template: 
    - insecte
    - poisson
    - habitant
    - marin
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