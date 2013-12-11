<?php namespace Eubby\Social\Repositories;

use Eubby\Social\Models as Model;

class CommentRepository implements CommentInterface
{

	protected $model = null;

	protected $validationErrors = array();

	public function __construct(Model\SocialCommentModel $comment)
	{
		$this->model = $comment;
	}

	public function findAll()
	{
		$comments = $this->model->orderBy('created_at', 'desc')->get();

		return $comments;
	}

	public function find($id)
	{
		$comment = $this->model->find($id);

		return $comment;
	}

	public function like()
	{

	}

	public function create($data = array())
	{
		if ($this->model->isValid($data))
		{
			$model = $this->model->create($data);

			return $model;
		}

		$this->validationErrors = $this->model->validationErrors();
		return false;
	}

	public function save($data)
	{
		$this->model->save($data);

		return true;
	}

	public function getValidationErrors()
	{
		return $this->validationErrors;
	}
}