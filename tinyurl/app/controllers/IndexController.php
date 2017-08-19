<?php
use TinyURL\Repository\Link\LinkRepositoryInterface;

class IndexController extends BaseController
{

    protected $_link;
    
    /* Magic by "service provider" TinyURL\Repository\Link\TinyURLRepositoryProvider
    (LinkRepositoryInterface $shortLinkRepo) = new TinyURL\Repository\Link\ShortLinkRepository */
    public function __construct(LinkRepositoryInterface $shortLinkRepo)
    {
        $this->_link = $shortLinkRepo;
        $this->beforeFilter('auth');
    }

    public function  showIndex()
    {
        return View::make('index.index');
    }   

    public function postUrl()
    {
        $url = Input::get('url');
        $rules = array('url' => 'required|url');
        $validator = Validator::make(array('url'=> $url), $rules);

        if ($validator->fails())
            return Redirect::to('/')->withErrors($validator);

        $id = $this->_link->create($url);
        $shortUrl = URL::to('/', array($id));

        return View::make('index.link',array('link' => $shortUrl)); 
    }

    public function getRedirect($id)
    {
        $url = $this->_link->find($id);

        if (!$url)
            $url = '/';

        return Redirect::to($url);
    }

}

