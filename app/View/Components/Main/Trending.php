<?php

namespace App\View\Components\Main;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Trending extends Component
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
        return view('components.main.trending');
    }

	public function getTrendingTopics()
	{
		return \App\Models\Topic::addSelect(['total_posts' => Post::select(DB::raw('count(topic_id)'))
			->whereColumn('topic_id', 'topics.id')
		])->orderBy('total_posts', 'desc')->limit(5)->get();
    }

    public function getTotalPosts($id)
    {
    	return $this->getTotalPostsPorTopico($id);
    }

	public function getDataFormatada($data)
	{
		return Carbon::parse($data)->format('d/m/Y H:i');
    }

    public function getTotalPostsPorTopico($id) {
    	return DB::table('posts')
		    ->where('topic_id', '=', $id)
		    ->count();
    }
}
