<?php namespace Eubby\Social\Repositories;

interface ProfileInterface 
{
	public function find($id);
	
	public function getImage();

	public function getFullName();

	public function getCountry();

	public function getAge();

	public function getWork();

	public function isPrivate();

}