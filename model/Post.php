<?php
class Post {
	private $id;
	private $text;
	
	public function setId($id) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setText($text) {
		$this->text = $text;
	}
	public function getText() {
		return $this->text;
	}
}

?>