<?php

namespace Suap\Http\Traits;

trait FileTrait{
	public function storeFile(){

	}

	public function prepareData($request, $file){
		$data = [
		"name" => $request['name'],
		"lastname" => $request['lastname'],
		"password" => $request['password'],
		"file_id" => $file->id,
		];

		return $data;
	}
}

