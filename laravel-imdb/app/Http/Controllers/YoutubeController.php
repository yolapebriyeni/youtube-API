<?php

namespace App\Http\Controllers;
use App\Services\YoutubeApiService;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    protected $youtube;

    public function __construct(YoutubeApiService $youtube)
    {
        $this->youtube = $youtube;
    }

    public function search(Request $request)
    {
        $query = $request->query('q', 'baby spa'); // default pencarian
        $result = $this->youtube->searchVideos($query);
        return view('videos', ['data' => $result]);
    }

    public function detail($id)
    {
        $result = $this->youtube->getVideoById($id);
        return view('video_detail', ['data' => $result]);
    }
}
