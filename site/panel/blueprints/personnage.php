<?php if(!defined('KIRBY')) exit ?>

# personnage blueprint

title: Personnage
pages: false
files: true
fields:
  title: 
    label: Nom
    type: text
  english: 
    label: Nom Anglais
    type: text
  sex:
    label: Sexe
    type: radio
    options:
      Mâle: Mâle
      Femelle: Femelle
      Autre: Autre
  location:
    label: Lieu
    type: text
  time: 
    label: Moment
    type: text
  species:
    label: Espèce
    type: text
  ispic:
    label: Possède une photo
    type: radio
    help: Le personnage spécial possède-t'il une photo ?
    options:
      oui: Oui
      non: Non
  picquote:
    label: Texte de la photo
    type: text
  iscofee:
    label: Présence au café
    type: radio
    help: Indiquez si le personnage fait son apparition dans le café
    options:
      oui: Oui
      non: Non
  cofee:
    label: Type de grains de café
    type: radio
    options:
      Mélange: Mélange
      Moka: Moka
      Kilimandjaro: Kilimandjaro
      Blue_Mountain: Blue Mountain
  milk:
    label: Quantité de lait
    type: radio
    options:
      Plein: Plein (3)
      La_Quantité_Normale:La quantité normale (2)
      Un_Peu: Un peu (1)
      Pas_Une_Goutte: Pas une goutte (0) 
  sugar:
    label: Quantité de sucre
    help: (la même que le lait pour les habitants)
    type: radio
    options: 
      Trois: Trois
      Deux: Deux
      Un: Un
      Zéro: Zéro
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