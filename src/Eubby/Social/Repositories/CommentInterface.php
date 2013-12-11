<?namespace Eubby\Social\Repositories;

interface CommentInterface
{
	public function findAll();

	public function find($id);

	public function create($data = array());

	public function save($data);

	public function like();

	public function getValidationErrors();
}