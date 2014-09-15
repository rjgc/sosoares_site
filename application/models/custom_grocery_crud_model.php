<?php 
class Custom_grocery_crud_model extends grocery_CRUD_Model
{
	function get_list()
	{
		if($this->table_name === null)
			return false;

		$select = "{$this->table_name}.*";

		// ADD YOUR SELECT FROM JOIN HERE <------------------------------------------------------
		// for example $select .= ", user_log.created_date, user_log.update_date";
		$select .= ", user_profiles.*";

		if(!empty($this->relation))
			foreach($this->relation as $relation)
			{
				list($field_name , $related_table , $related_field_title) = $relation;
				$unique_join_name = $this->_unique_join_name($field_name);
				$unique_field_name = $this->_unique_field_name($field_name);

				if(strstr($related_field_title,'{'))
					$select .= ", CONCAT('".str_replace(array('{','}'),array("',COALESCE({$unique_join_name}.",", ''),'"),str_replace("'","\\'",$related_field_title))."') as $unique_field_name";
				else	  
					$select .= ", $unique_join_name.$related_field_title as $unique_field_name";

				if($this->field_exists($related_field_title))
					$select .= ", {$this->table_name}.$related_field_title as '{$this->table_name}.$related_field_title'";
			}

			$this->db->select($select, false);

			// ADD YOUR JOIN HERE for example: <------------------------------------------------------
			// $this->db->join('user_log','user_log.user_id = users.id');
			$this->db->join('user_profiles','user_profiles.user_profile_user_id = '. $this->table_name . '.user_id');

			$results = $this->db->get($this->table_name)->result();

		return $results;
	}
}