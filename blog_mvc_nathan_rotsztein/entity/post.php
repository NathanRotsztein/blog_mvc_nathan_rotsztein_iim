<?php namespace entity;

class post
{
	

	private $id;
	private $nom;
	private $nb_depost;

	

	public function get_id(){ return $this->id; }
	public function get_nom(){ return $this->nom; }
	public function get_nb_depost(){ return $this->nb_depost; }

	

	public function set_id($value){ $this->id = $value; }
	public function set_nom($value){ $this->nom = $value; }
	public function set_nb_depost($value){ $this->nb_depost = $value; }

	

	public function properties(){ return get_object_vars($this); }
	public function properties_names(){ return array_keys(get_object_vars($this)); }
	public function to_string() { return "nom : $this->id, nom : $this->nom, nb_depost : $this->nb_depost"; }
}

?>