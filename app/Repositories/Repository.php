<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Log;

class Repository implements IRepository
{
	protected $model;

	public function get($id)
	{
		return $this->model->findOrFail($id);
	}

	public function getAll()
	{
		return $this->model->all();
	}

	public function add($data)
	{
		$this->model->create($data);
	}

	public function update($data,$id)
	{
		
	}

	public function delete($id)
	{
		
	}

	public function getModel()
	{
		return $this->model;
	}

	public function setModel($model)
	{
		$this->model = $model;
	}
}