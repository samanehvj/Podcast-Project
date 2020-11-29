<?php

class HomeController extends Controller 
{

    public function index() 
    {
        $this->setView('index');
        $this->view->pageTitle = SITENAME . " - HOME";
        $this->view->render();
    }
    
    public function about() 
    {
        $this->setView('about');
        $this->view->pageTitle = SITENAME . " - ABOUT";
        $this->view->render();
    }
    

    public function episode()
    {
        $episodeModle = $this->model('Episode');
        $data['episodes'] = $episodeModle->getAll();
        $this->setView('episode', $data);
        $this->view->pageTitle = SITENAME . " - Episode";
        $this->view->render();
    }

    public function contact()
    {
        $this->setView('contact');
        $this->view->pageTitle = SITENAME . " - Contact";
        $this->view->render();
    }

    public function login()
    {
        $this->setView('login');
        $this->view->render();
    }

    public function pageNotFound()
    {
        $this->setView('pageNotFound');
        $this->view->render();
    }
}