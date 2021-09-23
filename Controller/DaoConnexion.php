<?php
//definition de la classe pour se connecter a la bdd
class DaoConnexion {
	private static $server = "mysql:host=localhost";
	//definition de la base de donnees 
	private static $db = "dbname=blog";
	//definition de l'utilisateur
	private static $user = "root";
	//definition du mot de passe
	private static $pwd = "";
	//definition de la connexion à la base de données
	protected static $link;
	//dans le constructeur on initialise la connexion à la base de données en utilisant l'objet PDO;
	public function __construct(){
		DaoConnexion::$link = new PDO(DaoConnexion::$server . ";" . DaoConnexion::$db, DaoConnexion::$user, DaoConnexion::$pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
}