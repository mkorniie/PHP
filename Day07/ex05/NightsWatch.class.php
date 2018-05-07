<?PHP
	Class NightsWatch{

		private $members;

		public function __construct(){
			return ;
		}

		public function recruit($p)
		{
			if (in_array("IFighter" , class_implements($p)))
			{
				if ($this->members == NULL)
				{
					$this->members = array($p);
				}
				else
					array_push($this->members, $p);
			}
			return ;
		}

		public function fight()
		{
			foreach ($this->members as $value) {
			    $value->fight();
			}
			return ;
		}

		public function __destruct(){
			return ;
		}
	}
?>