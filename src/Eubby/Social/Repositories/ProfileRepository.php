<?php namespace Eubby\Social\Repositories;

use Eubby\Social\Models as Model;

class ProfileRepository implements ProfileInterface
{

	protected $profile = null;

	public function __construct(Model\SocialProfileModel $profile)
	{
		$this->model = $profile;
	}

	public function find($id)
	{
		return $this->model->find($id);
	}

	public function getImage()
	{
		return $this->model->image;
	}

	public function getFullName()
	{
		return 'fullname';
	}

	public function getCountry()
	{
		return $this->model->country;
	}

	public function getAge()
	{
		return '99';
	}

	public function getWork()
	{
		return $this->model->work;
	}

	public function isPrivate()

	{
		return $this->model->privacy;
	}
}