<?php
	// This is the file for the parent class

	class ParentClass {
		private $fn;
		private $ln;
		private $m;
		private $h;

		public function __construct($f, $l, $m, $h) {
			 echo "<!-- here-->";
			$this->firstName=$f;
			$this->lastName=$l;
			$this->major=$m;
			$this->homeTown=$h;
		}

		public function getFirstName() {
			return $this->firstName;
		}

		public function getLastName() {
			return $this->lastName;
		}

		public function getMajor() {
			return $this->major;
		}

		public function getHomeTown() {
			return $this->homeTown;
		}

		public function __toString() {
			$name="Hello, my name is ". $this->getFirstName() . $this->getLastName() . " how are you?";
			$where="I am from: ". $this->getHomeTown();
			$study="I study: ". $this->getMajor();
			return "<div> ". $name . "<br>" . $where . "<br>" . $study . "<br> </div>";
		}
		
	}
