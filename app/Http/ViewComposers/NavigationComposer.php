<?php

namespace App\Http\ViewComposers;

use Auth;
use Illuminate\View\View;

class NavigationComposer 
{
	public function compose(View $view)
	{
		//for the navigation partition and for variables like channel()
		//share users-channel
		if(!Auth::check()){
			return;
		}
		//Here one can programm for more channels
		$view->with('channel', Auth::user()->channel->first());
	}
}