<?php
namespace Brein\V1\Rest\AdminUsers;

use ArrayObject;

class AdminUsersEntity extends ArrayObject
{

	public $id;

	public $name;

	public $username;

	public $active;

	public $is_superuser;

	public $created_at;

	public $updated_at;


	public function getArrayCopy()
	{
		return array(
			'id' => $this->id,
			'name' => $this->name,
			'username' => $this->username,
			'active' => $this->active,
			'is_superuser' => $this->is_superuser,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		);
	}

	public function exchangeArray($array)
	{
		$this->id = $array['id'];
		$this->name = $array['name'];
		$this->username = $array['username'];
		$this->active = $array['active'];
		$this->is_superuser = $array['is_superuser'];
		$this->created_at = $array['created_at'];
		$this->updated_at = $array['updated_at'];
	}
}