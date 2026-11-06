<?php

/**** Librairie de code du Catalogue de produits TeeTIM
 */

/**
 * Obtient les themes et les produits dans une langue et categorie der
 * @param string $categorie Categorie de produits(exemples : teeshirts, casquettes, etc)
 * @param string $codeLangue Code en 2 lettres de la langue d'affichage
 * @return array Tableau contenant les 2 structures contenant les theme et ___ produiots de categorie.
 */
function obtenirCatalogue($categorie, $codeLangue, $critereTri)
{
  $catalogue = json_decode(file_get_contents("data/$categorie.json"));

  // Obtenir les theme et les produit de ce catalogue
  $themes = [];
  $produits = [];
  // Boucler a travers le catalogue pour remplir les deux tableaux

  // print_r($catalogue);\

  foreach ($catalogue as $codeTheme => $detailTheme) {

    $themes[$codeTheme] = $detailTheme->theme->$codeLangue;
    // Il faut joindre tous les petits tableaux des produits dans chaque  
    $produits = array_merge($produits, $detailTheme->produits);
  }



// trier les produits avant 
  usort($produits, $critereTri);

  return [$themes, $produits];
}

function prixDesc($prd1, $prd2)
{
  // return $prd2->prix - $prd1->prix;
  if($prd1->prix > $prd2->prix) {
    return -1;
  } else if($prd2->prix > $prd1->prix) {
    return 1;
  } else {
    0;
  }
}

function prixAsc($prd1, $prd2)
{
  return $prd1->prix - $prd2->prix;
}

function ventesDesc($prd1, $prd2)
{
  return $prd2->ventes - $prd1->ventes;
}

function aleatoire($prd1, $prd2)
{
  $nbAlea = mt_rand() / mt_getrandmax() - 0.5;
  if($nbAlea > 0){
    return 1;
  } else {
    return -1;
  }
}
