<?php
class ControleurIndex{

    public static function home(){
        $vue='home';
        $pagetitle='ProjectGestionner';
        $page= "dashboard";
        require VIEW_PATH . "view.php";
    }

    public static function login(){
        $vue='login';
        $pagetitle='Connexion';
        $page= "login";
        require VIEW_PATH . "view.php";
    }    
    
    public static function register(){
        $vue='register';
        $pagetitle='Inscription';
        $page= "index";
        require VIEW_PATH . "view.php";
    }
    
    // public function classement(){

    //     $classement = Joueur::getClassementGeneral();
    //     $tableau = $classement["tableau"];
    //     $tableauVue = $classement["tableauVue"];
    //     $vue="classement";
    //     $pagetitle="Classement";
    //     $page= "index";
    //     require VIEW_PATH . "vue.php";
    // }
    
    // public function jouer(){
    //     if(estConnecte()) {
    //         $listtheme = Jeu::getNomTheme();
    //         $vue = 'attente';
    //         $pagetitle = 'Le jeu';
    //         $page = "jeu";
    //         require VIEW_PATH . "vue.php";
    //     }
    //     else{
    //         $this->defaut();
    //     }
    // }

    // public function sujetStat($data){
    //     $listSujets = Jeu::getNomSujet($data);
    //     require VIEW_PATH . "index".DIRECTORY_SEPARATOR."vueStatsIndex.php";
    // }

    // public function glitch(){
    //     $messageErreur = "Vous avez trouvé un glitch dans le système!";
    //     require VIEW_PATH . "vue.php";
    // }

    // public function selectStats($nomSujet){
    //     $stats = Stats::selectStat($nomSujet);
    //     if(empty($stats)){
    //         if(strpos(BASE, "statistiques")!=false){
    //             $url ="http://".URL.BASE;
    //         }
    //         else if(strpos(BASE, "index.php")!=false){
    //             $url="http://".URL.BASE."statistiques";
    //         } else{$url="http://".URL.BASE."index.php/statistiques";}
    //         $messageErreur = "Aucune données n'a été trouvé pour ce sujet !<br/>
    //         <h3>Essayez avec un sujet différent !</h3>
    //         <h4><a href=".$url."><i class='fa fa-reply'></i> Retour à la sélection du sujet</a></h4>";
    //         require VIEW_PATH . "vue.php";
    //     }
    //     else {
    //         $bestArg = $stats['bestArg'];
    //         $worstArg = $stats['worstArg'];
    //         $pourcentageFemmePour = $stats['pourcentageFemmePour'];
    //         $pourcentageHommePour = $stats['pourcentageHommePour'];
    //         $pourcentageFemmeContre = $stats['pourcentageFemmeContre'];
    //         $pourcentageHommeContre = $stats['pourcentageHommeContre'];
    //         $vue = 'statsGlobale';
    //         $pagetitle = 'Les Statistiques';
    //         $page = "index";
    //         require VIEW_PATH . "vue.php";
    //     }

    // }
}