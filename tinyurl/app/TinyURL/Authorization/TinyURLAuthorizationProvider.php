<?php
namespace TinyURL\Authorization;
use illuminate\Support\ServiceProvider;

class TinyURLAuthorizationProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->app->bind('\TinyURL\Authorization\User\UserAuthorizationInterface',
                         '\TinyURL\Authorization\User\DbUserAuthorization'
        );

        // $this->app->bind('\TinyURL\Authorization\User\UserAuthorizationInterface', function(){ 
        //                     return new \TinyURL\Authorization\User\DbUserAuthorization(new \User);
        //                 }
        // );
    }

}