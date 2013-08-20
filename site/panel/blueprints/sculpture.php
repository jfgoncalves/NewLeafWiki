<?php if(!defined('KIRBY')) exit ?>

# habitants blueprint

title: Sculpture
pages: false
files: true
fields:
  title: 
    label: Nom
    type: text
  english:
    label: Nom Anglais
    type: text
  realname:
    label: Nom IRL
    type: text
    help: Exemple = Les glaneuses
  realauthor: 
    label: Auteur IRL
    type: text
    help: Exemple = Jean-François Millet
  creation:
    label: Date de création
    type: text
    help: Exemple = 1857
  expo:
    label: Lieu d'exposition
    type: text
    help: Exemple = Musée d'Orsay
  support:
    label: Support
    type: text
    help: Exemple = Peinture à l'huile
  howtodetect:
    label: Détecter la contrefaçon
    type: textarea
    size: medium
    help: Indiquer ici comment détecter la contrefaçon
  museum:
    label: Texte du musée
    type: textarea
    size: medium
  text:
    label: Autres informations
    type: textarea
    size: large
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