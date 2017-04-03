<?php 
	// this file will extend PArentClass.php
	include 'ParentClass.php';

	class ChildClass extends ParentClass {
		public $firstName;
		public $lastName;
		public $major;
		public $homeTown;

		public function __construct($firstName, $lastName, $major, $homeTown) {
			$this->firstName=$firstName;
			$this->lastName=$lastName;
			$this->major=$major;
			$this->homeTown=$homeTown;
			 echo "<!-- Setting new Job to -->";

		}

		public function __clone() {
			clone this;
		}

		public function getFirstName() {
			return $this->firstName;
		}

		public function getLastName() {
			return $this->lastName;
		}

		public function setMajor($newMajor) {
			$this->major=$newMajor;
		}

		public function setHomeTown($newHomeTown) {
			$this->homeTown=$newHomeTown;
		}
		
	}
