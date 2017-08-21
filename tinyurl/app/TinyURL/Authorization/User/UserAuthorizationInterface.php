<?php 
namespace TinyURL\Authorization\User;

interface UserAuthorizationInterface
{
    public function save(array $array);
}