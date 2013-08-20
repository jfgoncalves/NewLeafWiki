<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  featured:
    label: Page mise en avant
    type: text
    help: Nom de la page. Par exemple = http://newleaf.fr/creatures-marines/algue-raisin-de-mer donne algue-raisin-de-mer
  usdlc:
    label: DLC Américain Actuel
    type: textarea
    size: small
  japdlc:
    label: DLC Japonais Actuel
    type: textarea
    size: small
  eudlc:
    label: DLC Européen Actuel
    type: textarea
    size: small
  text: 
    label: Text
    type:  textarea
    size:  large