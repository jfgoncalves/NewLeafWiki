<?php if(!defined('KIRBY')) exit ?>

# habitants blueprint

title: Habitant
pages: false
files: true
fields:
  title: 
    label: Prénom
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
    default: secondValue
  personality:
    label: Personnalité
    type: select
    options:
      Agréable: Agréable
      Arrogante: Arrogante
      Énergique: Énergique
      Goinfre: Goinfre
      Grincheux: Grincheux
      Normale: Normale
      Paresseux: Paresseux
      Sportif: Sportif
      Versatile: Versatile
  species:
    label: Espèce
    type: select
    options: 
      Aigle: Aigle
      Alligator: Alligator
      Autruche: Autruche
      Canard: Canard
      Cerf: Cerf
      Chat: Chat
      Cheval: Cheval
      Chèvre: Chèvre
      Chien: Chien
      Cochon: Cochon
      Écureuil: Écureuil
      Éléphant: Éléphant
      Fourmilier: Fourmilier
      Gorille: Gorille
      Grenouille: Grenouille
      Hamster: Hamster
      Hippopotame: Hippopotame
      Kangourou: Kangourou
      Koala: Koala
      Lapin: Lapin
      Lion: Lion
      Loup: Loup
      Mouton: Mouton
      Oiseau: Oiseau
      Ours: Ours
      Ourson: Ourson
      Pieuvre: Pieuvre
      Pingouin: Pingouin
      Poulet: Poulet
      Rhinocéros: Rhinocéros
      Singe: Singe
      Souris: Souris
      Taureau: Taureau
      Tigre: Tigre
      Vache: Vache
  birthday: 
    label: Anniversaire
    type: date
    format:dd.mm
  initphrase:
    label: Expression
    type: text
  initclothes: 
    label: Vêtement
    type: text
  picquote:
    label: Texte de la photo
    type: text
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