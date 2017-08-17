<?php
class ChinookController extends BaseController
{

	public function showArtists()
	{
        $all = Artist::all()->toArray();
        //var_dump($all);
		return View::make('task2.artists', ['all' => $all]);
	}

	public function showArtist($id = 1)
	{
        $all = Artist::find($id)->album()->get()->toArray();
        //var_dump($all);
		return View::make('task2.artist', ['all' => $all]);
	}

	public function showAlbum($id = 1)
	{
        $all = Album::find($id)->tracks()->get()->toArray();
        //var_dump($all);
		return View::make('task2.album', ['all' => $all]);
	}

	public function showTrack($id = 1)
	{
        $track = Track::find($id)->toArray();
        $album_name = Album::find($track["AlbumId"])->Title;
        $type = MediaType::find($track["MediaTypeId"])->Name;
        $genre = Genre::find($track["GenreId"])->Name;
        //var_dump($track);
		return View::make('task2.track', ['track' => $track,
                                          'type' => $type,
                                          'genre' => $genre,
                                          'album_name' => $album_name]);
	}
}