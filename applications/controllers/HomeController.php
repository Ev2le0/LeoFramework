<?php 
/**
*  \HomeController
*/
class HomeController extends BaseController
{
	
	public function home(){
		// $this->view = View::make('home')->with('article',Article::first())
		// 								->withTitle('Leo :-D')
		// 								->withFuck('ok!');
		// Redis::set('key','value',3000,'ms');
	    echo Redis::get('key');
	}

}