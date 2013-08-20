<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
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
  gallery:
    label: Mise en gallerie (Écrire 'oui' pour inclure ce fichier dans la gallerie)
    type: text