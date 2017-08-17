<?php
class Track extends Eloquent
{
    protected $table = 'Track';
    protected $primaryKey = 'Trackid';

    public function genre()
    {
        return $this->hasOne('Genre', 'GenreId', 'GenreId');
    }

    public function mediaType()
    {
        return $this->hasOne('MediaType', 'MediaTypeId', 'MediaTypeId');
    }

    public function album()
    {
        return $this->belongsTo('Album', 'AlbumId', 'AlbumId');
    }
}
