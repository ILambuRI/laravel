<?php
use TinyURL\Authorization\User\UserAuthorizationInterface;

class AuthController extends BaseController
{
    protected $_user;

    function __construct(UserAuthorizationInterface $user)
    {
        $this->_user = $user;
    }
    
    public function getLogin()
    {
        if ($email = Input::old('email'))
            return View::make('auth.login', ['email' => $email]);
        
        return View::make('auth.login');
    }
    
    public function postLogin()
    {
        Input::flashExcept('password');
        $data = ['email' => Input::get('email'),
                 'password' => Input::get('password')
        ];
        
        $rules = ['email' => 'required|email',
                  'password' => 'required|min:5|max:60'
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails())
            return Redirect::action('AuthController@getLogin')
                             ->withErrors($validator)
                             ->withInput();

        if (!Auth::validate($data))
            return Redirect::action('AuthController@getLogin')
                             ->withErrors('Incorrect data entered or Authorization error!')
                             ->withInput();

        if (Auth::attempt($data))
        {
            if (!Auth::id())
                return View::make('auth.login', ['info' => 'Authorization error, try later please!']);
        }

        return Redirect::intended();        
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function getRegistration()
    {
        if (Auth::check())
            return Redirect::intended();
        
        if (Input::old('email') | Input::old('name'))
        {
            $email = $name = false;
            $email = Input::old('email');
            $name = Input::old('name');
            return View::make('auth.registration', ['email' => $email, 'name' => $name]);
        }

        return View::make('auth.registration');
    }

    public function postRegistration()
    {
        Input::flashExcept('password');
        $data = ['name' => Input::get('name'),
                 'email' => Input::get('email'),
                 'password' => Input::get('password'),
                 'password_confirmation' => Input::get('confirm')
        ];

        $rules = array(
            'name' => 'required|alpha_num|min:3|max:255',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|min:5|max:60|confirmed',
            'password_confirmation' => 'required|min:5|max:60'
        );

        $validator = Validator::make($data, $rules);

        if ($validator->fails())
            return Redirect::action('AuthController@getRegistration')
                             ->withErrors($validator)
                             ->withInput();

        if ($this->_user->save($data))
            return View::make('auth.login', ['info' => 'Registration is successful! Sign in quickly! :)']);
            
        return View::make('auth.login', ['info' => 'Something went wrong when registering you, try later! :(']);

    }
}

