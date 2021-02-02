<?php 
	namespace App\Models;
	use CodeIgniter\Model;
	/**
	 * news model
	 */
	class NewsModel extends Model
	{
		
		protected $table = 'news';
		protected $allowedFields = ['title', 'slug', 'body'];

		public function getNews($slug=false)
		{
			if ($slug==false) {
				return $this->findAll();
			}
			return $this->asArray()
                ->where(['slug' => $slug])
                ->first();
		}
	}
