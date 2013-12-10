<?php namespace Eubby\Social\Repositories;

use Eubby\Social\Models as Model;

class PostRepository implements PostInterface
{

	protected $model = null;

	protected $validationErrors = array();

	public function __construct(Model\SocialPostModel $post)
	{
		$this->model = $post;
	}

	public function findAll()
	{
		return $this->model->orderBy('created_at', 'desc')->get();
	}

	public function find($id)
	{
		return $this->model->find($id);
	}

	public function isHidden()
	{
		return (bool) $this->model->hidden;
	}

	public function isPublic()
	{
		return ($this->model->visibility == 'public') ? true : false;
	}

	public function isFriends()
	{
		return ($this->model->visibility == 'friends') ? true : false;
	}

	public function isPrivate()
	{
		return ($this->model->visibility == 'private') ? true : false;
	}

	public function countLikes()
	{
		return $this->model->like_count;
	}

	public function countComments()
	{
		return $this->model->comment_count;
	}

	public function getBody()
	{
		return $this->model->body;
	}

	public function getUser()
	{
		return $this->model->user;
	}

	public function create(array $data)
	{
		if ($this->model->isValid($data))
		{
			$post = $this->model->create($data);
			return $post;
		}

		$this->validationErrors = $this->model->validationErrors();

		return false;
	}

	public function getValidationErrors()
	{
		return $this->validationErrors;
	}
}