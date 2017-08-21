<?php
namespace TinyURL\Authorization\User;

class DbUserAuthorization implements UserAuthorizationInterface
{

    protected $_model;

    public function __construct(\User $model)
    {
        $this->_model = $model;
    }

    public function save(array $data)
    {
        $user = $this->_model;
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->password = \Hash::make($data['password']);

        if ($user->save())
            return true;

        return false;
    }

}

