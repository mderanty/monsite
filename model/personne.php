<?php
/**
* 
*/
class ClassPersonne
{
	
	
	private $id;
	private $nom;
	private $prenom;
	private $dateNaissance;
	private $adrmail;
	private $pseudo;
	private $mdp;

	public function __construct($id, $nom, $prenom, $dateNaissance, $adrmail, $pseudo, $mdp){
		$this-> id = $id;
		$this-> nom = $nom;
		$this->	prenom = $prenom;
		$this-> dateNaissance = $dateNaissance;
		$this-> adrmail = $adrmail;
		$this-> pseudo = $pseudo;
		$this-> mdp = $mdp;
	}

	//getter et setter pour id
    public function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;
 
        return $this;
    }

	//getter et setter pour nom
    public function getNom()
    {
        return $this->nom;
    }
 
    public function setNom($nom)
    {
        if (is_string($nom)) {
        	$this->nom = $nom;
        }
 
        return $this;
    }

   //getter et setter pour prenom
    public function getPrenom()
    {
        return $this->prenom;
    }
 
    public function setPrenom($prenom)
    {
        if (is_string($prenom)) {
        	$this->prenom = $prenom;
        }
 
        return $this;
    }
	
	//getter et setter pour dateNaissance
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    //getter et setter pour adrmail
    public function getAdrmail()
    {
        return $this->adrmail;
    }
 
    public function setAdrmail($adrmail)
    {
        if (is_string($adrmail)) {
        	$this->adrmail = $adrmail;
        }
        return $this;
    }

	//getter et setter pour pseudo
    public function getPseudo()
    {
        return $this->pseudo;
    }
 
    public function setPseudo($pseudo)
    {
        if (is_string($pseudo)) {
        	$this->pseudo = $pseudo;
        }
        return $this;
    }

    //getter et setter pour mdp
    public function getMdp()
    {
        return $this->mdp;
    }
 
    public function setMdp($mdp)
    {
        if (is_string($mdp)) {
        	$this->mdp = $mdp;
        }
        return $this;
    }

}


?>