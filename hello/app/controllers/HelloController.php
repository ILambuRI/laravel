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

}
