<?php namespace App\Controllers;
	use CodeIgniter\Controller;
	class Pages extends Controller{

		public function index(){
			return view('welcome_message');
		}
		public function about(){
			echo view('pages/about');
		}

		public function view($page='home'){
			if(! is_file(APPPATH.'/Views/pages/'.$page.'.php')){
				 // Whoops, we don't have a page for that!
        		throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
			}

			$data['title'] = ucfirst($page);
			echo view('templates/header',$data);
			echo view('pages/'.$page,$data);
			echo view('templates/footer',$data);
		}

	}
