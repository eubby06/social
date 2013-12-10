<?php namespace Eubby\Social\Repositories;

interface PostInterface
{
	public function findAll();

	public function find($id);

	public function isHidden();

	public function isPublic();

	public function isFriends();

	public function isPrivate();

	public function countLikes();

	public function countComments();

	public function getBody();

	public function getUser();

	public function create(array $data);

	public function getValidationErrors();
}