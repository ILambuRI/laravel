<?php
class Track extends Eloquent
{
    protected $table = 'Track';
    protected $primaryKey = 'Trackid';

    public function genre()
    {
        return $this->hasOne('Genre', 'GenreId', 'GenreId');
    }
}
