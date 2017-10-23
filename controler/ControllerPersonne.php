<?php 
Class ControllerPersonne(){

	private $_db;//instanciation de la PDO

	public funcion __construct($db)
	{
		$this->setDb($db);
	}


	public function add(Personne $perso)
	{
		$query = $this->_db->prepare('INSERT INTO Personne(nom, prenom, dateNaissance, adrmail, pseudo, mdp) 
			VALUES(:nom, :prenom, :dateNaissance, :adrmail, :pseudo, :mdp)');

		$query->bindValue(':nom', $perso->getNom());
		$query->bindValue(':prenom', $perso->getPrenom());
		$query->bindValue(':dateNaissance', $perso->getDateNaissance());
		$query->bindValue(':adrmail', $perso->getAdrmail());
		$query->bindValue(':pseudo', $perso->getPseudo());
		$query->bindValue(':mdp', $perso->getMdp());

		$query->execute();
	}

	public function delete(Personne $perso)
	{
		$this->_db->exec('DELETE FROM Personne WHERE id = '.$perso->GetId());
	}

	public function update(Personne $perso)
	{
		$q = $this->_db->prepare('UPDATE Personne SET nom = :nom, prenom = :prenom, dateNaissance = :dateNaissance, 
			 adrmail = :adrmail,  pseudo = :pseudo, mdp = :mdp WHERE id = :id');
    	$q->bindValue(':nom', $perso->ĝetNom());
    	$q->bindValue(':prenom', $perso->getPrenom());
    	$q->bindValue(':dateNaissance', $perso->getDateNaissance());
    	$q->bindValue(':adrmail', $perso->getAdrmail());
    	$q->bindValue(':pseudo', $perso->getPseudo());
    	$q->bindValue(':mdp', $perso->getMdp());
    	$q->bindValue(':id', $perso->getId(), PDO::PARAM_INT);
    	$q->execute();
	}

	public function getId($id)
	{

	}

	public function setDb(PDO $db)
  	{
    	$this->_db = $db;
  	}
}
?>