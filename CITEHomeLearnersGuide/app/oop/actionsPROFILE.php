<?php

class Actions
{

		//------------UPDATE DATA FROM DATABASE----------------

	public function update($ref,$key,$data)
		{
			include('db.php');
				$database->getReference($ref)->getChild($key)->update($data);

			header('Location:\CITEHomeLearnersGuide\profile.php?msg=update');

			
		}
		
	

}

?>