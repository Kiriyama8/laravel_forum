<?php

namespace App\View\Components;

use App\Models\Category as Categories;
use Illuminate\View\Component;

class Category extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.category');
    }

	public function getAllCategories() {
    	return Categories::where('active', Categories::ACTIVE)->latest()->get();
    }

    public function randomString(int $stringLength): string {
    	$charactersAccepted = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    	$randomStringGenerated = '';

    	for ($i=0; $i < $stringLength; $i++) {
    		$rangString = rand(0, strlen($charactersAccepted) - 1);
    		$randomStringGenerated .= $charactersAccepted[$rangString];
	    }

    	return $randomStringGenerated;
    }
}
