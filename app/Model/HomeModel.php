<?php


class HomeModel
{
	
	public function userList($id = null)
	{
		$users = [
				    1 => [
				        "name" => "Mark",
				        "lastname" => "Johnson",
				        "email" => "mark@email.com",
				    ],
				    2 => [
				        "name" => "Anna",
				        "lastname" => "Smith",
				        "email" => "anna@email.com",
				    ],
				    3 => [
				        "name" => "Steve",
				        "lastname" => "Miller",
				        "email" => "steve@email.com",
				    ],
				    4 => [
				        "name" => "Emily",
				        "lastname" => "Davis",
				        "email" => "emily@email.com",
				    ],
				    5 => [
				        "name" => "Brian",
				        "lastname" => "White",
				        "email" => "brian@email.com",
				    ],
				    6 => [
				        "name" => "Emma",
				        "lastname" => "Anderson",
				        "email" => "emma@email.com",
				    ],
				    7 => [
				        "name" => "Daniel",
				        "lastname" => "Clark",
				        "email" => "daniel@email.com",
				    ],
				    8 => [
				        "name" => "Olivia",
				        "lastname" => "Moore",
				        "email" => "olivia@email.com",
				    ],
				    9 => [
				        "name" => "Michael",
				        "lastname" => "Lee",
				        "email" => "michael@email.com",
				    ],
				    10 => [
				        "name" => "Sophia",
				        "lastname" => "Hill",
				        "email" => "sophia@email.com",
				    ],
				];

		return ($id) ? $users[$id] : $users;
	}
}