<?php
class Artist extends Eloquent
{
    protected $table = 'Artist';
    protected $primaryKey = 'ArtistId';

    public function album()
    {
        return $this->hasMany('Album', 'ArtistId', 'ArtistId');
    }
}
