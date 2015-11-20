<?php
/**
 * Classe Utilisateur
 *
 * @filesource model/class/Utilisateur.php
 * @author David RIEHL <david.riehl@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, D. [R]IEHL
 */
class Utilisateur {
    
    /**
     * Properties
     */
    
    /**
     * @property int $id Primary Key
     * @access public
     */
    public $id;
    
     /**
     * @property string $identifiant
     * @access public
     */
    public $identifiant;

     /**
     * @property string $motdepasse
     * @access public
     */
    public $motdepasse;
        
     /**
     * @property string $pseudo
     * @access public
     */
    public $pseudo;
        
     /**
     * @property string $avatar
     * @access public
     */
    public $avatar;
        
    /**
     * @property string $nom
     * @access public
     */
    public $nom;
    
    /**
     * @property int $id_confid_nom Foreign Key references Confidentialite->id
     * @access public
     */
    public $id_confid_nom;
    
    /**
     * @property string $prenom
     * @access public
     */
    public $prenom;
    
    /**
     * @property int $id_confid_prenom Foreign Key references Confidentialite->id
     * @access public
     */
    public $id_confid_prenom;
    
    /**
     * @property date $naissance
     * @access public
     */
    public $naissance;
    
    /**
     * @property int $id_confid_naissance Foreign Key references Confidentialite->id
     * @access public
     */
    public $id_confid_naissance;
    
    /**
     * @property string $sexe
     * @access public
     */
    public $sexe;
    
    /**
     * @property int $id_confid_sexe Foreign Key references Confidentialite->id
     * @access public
     */
    public $id_confid_sexe;
    
    /**
     * @property string $email
     * @access public
     */
    public $email;

    /**
     * @property string $email_hash
     * @access public
     */
    public $email_hash;

    /**
     * @property int $id_confid_email Foreign Key references Confidentialite->id
     * @access public
     */
    public $id_confid_email;
    
    /**
     * @property string $ville
     * @access public
     */
    public $ville;

    /**
     * @property int $id_confid_ville Foreign Key references Confidentialite->id
     * @access public
     */
    public $id_confid_ville;
    
    /**
     * @property int $id_pays Foreign Key references Pays->id
     * @access public
     */
    public $id_pays;

    /**
     * @property int $id_confid_pays Foreign Key references Confidentialite->id
     * @access public
     */
    public $id_confid_pays;
    
     /**
     * @property string $description
     * @access public
     */
    public $description;

    /**
     * @property int $id_confid_description Foreign Key references Confidentialite->id
     * @access public
     */
    public $id_confid_description;
    
     /**
     * @property int $actif
     * @access public
     */
    public $actif;

    /**
     * @property int $id_utilisateur_parrainer Foreign Key references Utilisateur->id
     * @access public
     */
    public $id_utilisateur_parrainer;
    
    /**
     * @property int $id_niveau_utilisateur Foreign Key references Niveau_Utilisateur->id
     * @access public
     */
    public $id_niveau_utilisateur;
    
   /**
     * Methods
     */
    
    public function __toString() {
        
        $str=(empty($this->prenom) || empty($this->nom))?"":" ";
        return $this->pseudo . " (" . $this->prenom . $str . $this->nom . ")";
    }
    
    /**
     * @access public
     * @return boolean return true if email_hash match with gravatar
     */
    public function hasGravatar()
    {
        $url = 'http://www.gravatar.com/avatar/'.$this->email_hash.'/?d=404';
        $headers = get_headers($url,1);
        $array = explode(" ", $headers[0]);
        return $array[1]=='200';
    }
}
?>