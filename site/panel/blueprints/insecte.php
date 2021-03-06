<?php if(!defined('KIRBY')) exit ?>

# insectes blueprint

title: Insecte
pages: false
files: true
fields:
  title: 
    label: Nom
    type: text
  english:
    label: Nom Anglais
    type: text
  location:
    label: Lieu
    type: text
    help: Exemple = Sur la plage / dans l'air / Sur l'herbe / Sur les fleurs / Au sol / Sur les palmiers / Sur les arbres
  time:
    label: Moment de la journée
    type: text
    help: Exemple = 9h à 17h
  month:
    label: Moment de l'année
    type: text
    help: Exemple = Juillet à Septembre
  retail: 
    label: Prix de revente chez Reventes et Retouches
    type: text
    help: Prix sans l'arrêté de croissance
  museum:
    label: Texte du musée
    type: textarea
    size: medium
  rarity: 
    label: Rareté
    type:  radio
    options:
      Abondant: Abondant
      Commun: Commun
      Rare: Rare
      TrèsRare: Très Rare
  house:
    label: Place dans la maison (Longueur x Largeur)
    type: text
  catchphrase:
    label: Phrase de capture
    type: textarea
    size: small
    help: Ne pas inclure le 'Tu as pris une ... !'
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