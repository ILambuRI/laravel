<?php
class HelloController extends BaseController
{
    public function showIndex($name = '%username%')
    {
        return View::make('hello.index', array ('username' => $name));
    }

    public function showForm($val = 'form')
    {
        return View::make('hello.form', array ('val' => $val));
    }

    public function postForm()
    {
        return Redirect::route('bladepath');
        //return Redirect::to('blade');
        //return View::make('hello.post', array ('name' => Input::get('name')));
    }

    public function showBlade()
    {
        return View::make('hello.blade', array ('list' => array (1,2,3,4,5), 'item' => 'my text', 'ival' => 100));
    }
    
    public function getAction()
    {
        return View::make('hello.my-form');
    }
    
    public function postMyForm()
    {
        return print_r(Input::all(), true);
    }
    
    public function getJson()
    {
        $data = array ('name'=>'Vasya', 'email'=>'mail@mail.com');
        return Response::json($data);
    }

    public function getSession()
    {
        return View::make('hello.my-form');
    }

    public function postSession()
    {
        Session::put('my-form', Input::all());
        Session::put('my-form-name', Input::get('name'));
        return print_r(Session::all(), true);
    }

    public function getFlush()
    {
        Session::flush();
        return 'Delete all Session!';
    }


}
