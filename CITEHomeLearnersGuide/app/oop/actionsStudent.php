<?php

class Actions
{

		//------------INSERT INTO DATABASE----------------

	public function insert($ref,$user,$fields)
		{
			include	('db.php');
			$pushData = $database->getReference($ref)->getChild($user)->set($fields);

			header('Location:\CITEHomeLearnersGuide\userstudents.php?msg=inserted');
		}


		//------------SELECT DATA FROM DATABASE----------------

	public function select($ref)
		{
			include('db.php');
			$getData = $database->getReference($ref)->getValue();

			return $getData;
		}

		//------------DELETE DATA FROM DATABASE----------------

	public function delete($ref,$key)
		{
			include('db.php');
				$database->getReference($ref)->getChild($key)->remove();

			header('Location:\CITEHomeLearnersGuide\userstudents.php?msg=deleted');
		}


		//------------UPDATE DATA FROM DATABASE----------------

	public function update($ref,$key,$data)
		{
			include('db.php');
				$database->getReference($ref)->getChild($key)->update($data);

			header('Location:\CITEHomeLearnersGuide\userstudents.php?msg=update');

			
		}
		
	

}

?>