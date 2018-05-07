<?PHP
Class UnholyFactory{

	private $fighters;

	public function absorb($f)
	{
		if (get_parent_class($f) == "Fighter")
		{
			if (($this->fighters != NULL) && (array_key_exists($f->name, $this->fighters)))
				print("(Factory already absorbed a fighter of type " . $f->name . ")".PHP_EOL);
			else {
				print("(Factory absorbed a fighter of type " . $f->name . ")".PHP_EOL);
				if ($this->fighters == NULL)
					$this->fighters = array($f->name => $f);
				else
					$this->fighters[$f->name] = $f;
			}

		}
		else
			print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
		return ;
	}

	public function fabricate($f){
		if ($this->fighters == NULL || (array_key_exists($f, $this->fighters) == false))
		{
			print("(Factory hasn't absorbed any fighter of type " . $f . ")" . PHP_EOL);
			return NULL;
		}
		else
		{
			print("(Factory fabricates a fighter of type " . $f . ")" . PHP_EOL);
		}
		return $this->fighters[$f];
	}
}
?>