<?php
/* 
 * Script qui permet de compresser les css
 * http://drupalfr.org/book/export/html/727
 */

?>
<?php
function compress_css($base,$dir) {
  // Lecture du fichier source
  $css=file_get_contents($dir.'/'.$base);


// Inclusion des CSS importés
  $pattern='/\@import url((.<em>.css));/e';
  $replace='compress_css("\1","'.$dir.'")';


$css=preg_replace(
    $pattern,
    $replace,
    $css
  );


// Transforme les retours chariots Windows en Unix
  $css=str_replace(chr(13),chr(10),$css);


// Supprime les commentaires
  $debut_commentaire=strpos($css,'/</em>');
  $precedent        ='normal'; // Gestion du hack IE
  while($debut_commentaire!==FALSE) {
    $fin_commentaire=strpos($css,'<em>/',$debut_commentaire+2);
    if($fin_commentaire===FALSE) break;


// Gère le hack IE
    if(substr($css,$fin_commentaire-1,1)=='\') {
      // Le commentaire est un Hack pour IE, on garde le commentaire en le vidant
      $css=substr($css,0,$debut_commentaire).
           '/</em>*/'.
           substr($css,$fin_commentaire+2);

      // Le prochain commentaire doit être conservé pour terminer le hack
      $precedent='
hack';
    } else {
      // Si le précédent commentaire était un hack,
      // le commentaire actuel doit être gardé pour terminer le hack
      if($precedent=='hack') {
        $css=substr($css,0,$debut_commentaire).
             '/**/'.
             substr($css,$fin_commentaire+2);
      } else {
        // Commentaire normal, on le supprime complètement
        $css=substr($css,0,$debut_commentaire).
             substr($css,$fin_commentaire+2);
      }

      $precedent='normal';
    }

    $debut_commentaire=strpos($css,'
/<em>',$debut_commentaire+1);
  }

  // Les identifiants se suffisent à eux-mêmes, pas besoin de préciser l'
élément
  $pattern='/[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_]+#/';
  $replace='#';


$css=preg_replace(
    $pattern,
    $replace,
    $css
  );


// Transforme les retours chariots en espace
  $pattern='/'.chr(10).'+/';
  $replace=' ';


$css=preg_replace(
    $pattern,
    $replace,
    $css
  );


// Transforme les espaces multiples en espaces simples
  $pattern='/[ '.chr(9).']+/';
  $replace=' ';


$css=preg_replace(
    $pattern,
    $replace,
    $css
  );


// Supprime les espaces inutiles
  $pattern='/[ '.chr(9).']</em>([:;{},])[ '.chr(9).']<em>/';
  $replace='\1';


$css=preg_replace(
    $pattern,
    $replace,
    $css
  );


// Les points-virgules sont inutiles en fin de block (juste avant l'accolade fermante)
  $css=str_replace(';}','}',$css);


// Retourne le CSS compressé
  return $css;
}

function
recupere_liste_fichiers_css($styles) {
  $liste=array();


// Récupère les @import
  $pattern='/\@import "([^;]</em>.css)";/';
  $matches=array();


preg_match_all($pattern,$styles,$matches,PREG_PATTERN_ORDER);


$liste=array_merge($liste,$matches[1]);


// Récupère les link rel="stylesheet"
  $pattern='/<link rel=["\']stylesheet["\'][^>]<em>href=<a href="[^>"\']+" rel="nofollow">"\'</a>["\'][^>]</em>\/>/';
  $matches=array();


preg_match_all($pattern,$styles,$matches,PREG_PATTERN_ORDER);

  foreach(
$matches[1] as $url) {
    if(substr($url,0,7)=='http://') {
      $mon_adresse='http://'.$_SERVER['HTTP_HOST'].'/';
      if(substr($url,0,strlen($mon_adresse))==$mon_adresse) {
        $url=substr($url,strlen($mon_adresse)-1);
      }
    }


$liste[]=$url;
  }

  return
$liste;
}

function
nettoie_styles($styles) {
  // Retire les style en @import
  $pattern='/<style[^>]*>\@import[^<]*<\/style>/';
  $replace='';


$styles=preg_replace($pattern,$replace,$styles);


// Retire les style en link rel
  $pattern='/<link rel=["\']stylesheet["\'][^>]*\/>/';
  $replace='';


$styles=preg_replace($pattern,$replace,$styles);

  return
$styles;
}

function
compress_tout_les_styles($styles) {
  $liste=recupere_liste_fichiers_css($styles);

  $empreinte=hash('md5',implode('|',$liste));

  $fichier_all    =dirname(__FILE__).'/'.$empreinte.'.compress.css';
  $fichier_all_web=substr($fichier_all,strlen($_SERVER['DOCUMENT_ROOT']);

  if(!
is_readable($fichier_all)) {
    $total='';
    foreach($liste as $fichier) {
      $chemin=$_SERVER['DOCUMENT_ROOT'].$fichier;
      $total.=compress_css(basename($chemin),dirname($chemin));
    }


file_put_contents($fichier_all,$total);
  }


$styles=nettoie_styles($styles);
  $styles.='<style type="text/css" media="all">@import "'.$fichier_all_web.'";</style>';

  return $styles;
}
?>