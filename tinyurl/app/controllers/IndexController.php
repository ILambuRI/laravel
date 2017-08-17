<?php
use TinyURL\Repository\LinkRepository;

class IndexController extends BaseController
{
    protected $linkRepo;

    public function __construct(LinkRepository $linkRepo)
    {
        $this->linkRepo = $linkRepo;
    }

    public function showIndex()
    {
        return View::make('index.index');
    }
    
    public function postUrl()
    {

        $url = Input::get('url');
        $rules = ['url'=>'required|url'];
        $validator = Validator::make(['url' => $url], $rules);
        if ($validator->fails())
        {
            return Redirect::to('/index')->withErrors($validator);
        }
        
        $id = $this->linkRepo->create($url);
        $shortUrl = URL::to('/index', [$id]);
        return View::make('index.link', ['link' => $shortUrl]);
    }

    public function getRedirect($id)
    {
        $url = $this->linkRepo->find($id);
        var_dump($url);
        if (!$url)
        {
            $url = '/index';
        }
        return Redirect::to($url);
    }









	public function showArtists()
	{
        $all = Artist::all()->toArray();
		return View::make('task2.artists', ['all' => $all]);
	}

	public function showArtist($id = 1)
	{
        $all = Artist::find($id)->album()->get()->toArray();
		return View::make('task2.artist', ['all' => $all]);
	}

	public function showAlbum($id = 1)
	{
        $all = Album::find($id)->tracks()->get()->toArray();
		//$id_art = Album::find($id)->ArtistId;
        //$artist = Artist::where('ArtistId', $id_art)->get()->toArray();
        $artist = Album::find($id)->artist()->get()->toArray();
         
        //var_dump($art);
		return View::make('task2.album', ['all' => $all, 'artist' => $artist]);
	}

	public function showTrack($id = 1)
	{
        $track = Track::find($id)->toArray();
        $album_name = Album::find($track["AlbumId"])->Title;
        $type = MediaType::find($track["MediaTypeId"])->Name;
        $genre = Genre::find($track["GenreId"])->Name;
		return View::make('task2.track', ['track' => $track,
                                          'type' => $type,
                                          'genre' => $genre,
                                          'album_name' => $album_name]);
	}

}
