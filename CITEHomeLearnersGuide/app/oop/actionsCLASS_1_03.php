<?php

class Actions
{

		//------------INSERT INTO DATABASE----------------

	public function insert($ref,$learning,$year,$section,$title,$fields)
		{	
			include	('db.php');		
			$pushData = $database->getReference($ref)->getChild($learning)->getChild($year)->getChild($section)->getChild($title)->set($fields);

			header('Location:\CITEHomeLearnersGuide\connect_1st_03_class.php?msg=inserted');
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

			header('Location:\CITEHomeLearnersGuide\connect_1st_03_class.php?msg=deleted');
		}


		//------------UPDATE DATA FROM DATABASE----------------

	public function update($ref,$learning,$key,$year,$section,$title,$data)
		{
			include('db.php');
				$database->getReference($ref)->getChild($learning)->getChild($year)->getChild($section)->getChild($key)->update($data);

			header('Location:\CITEHomeLearnersGuide\connect_1st_03_class.php?msg=update');

			
		}
		
	

}

?>