<?php

class EpisodeController extends Controller
{

    public function adminList()
    {
        if (isset($_SESSION['userId']) && $_SESSION['userId']) {
            $episodeModel = $this->model('Episode');
            $episodeData['episodes'] = $episodeModel->getAll();

            $this->setView('cms/episodesList', $episodeData);
            $this->view->pageTitle = SITENAME . " - episodes List";
            $this->view->render();
        } else {
            $this->go('home', 'login');
        }
    }

    public function adminAdd()
    {
        if (isset($_SESSION['userId']) && $_SESSION['userId']) {

            $this->setView('cms/episodeAdd');
            $this->view->pageTitle = SITENAME . " - Episode Add";
            $this->view->render();
        } else {
            $this->go('home', 'login');
        }
    }

    public function adminDoAdd()
    {
        if (isset($_SESSION['userId']) && $_SESSION['userId']) {

            if (!isset($_POST['title']) || empty($_POST['title'])) {
                $_SESSION['err'] = 'All fields should be filled';
                $this->go('episode', 'adminAdd');
            }

            $episodeModel = $this->model('Episode');
            
            if ($episodeModel->add($_POST['title'], $_POST['img'], $_POST['iframe'], $_POST['link'])) {
                $_SESSION['success'] = true;
                $this->go('episode', 'adminList');
            }

        } else {
            $this->go('home', 'login');
        }
    }

    public function adminEdit($id = 0)
    {
        if (isset($_SESSION['userId']) && $_SESSION['userId'] && $id > 0) {

            $episodeModel = $this->model('Episode');
            $episode =  $episodeModel->getById($id);
            $this->setView('cms/episodeEdit', $episode);
            $this->view->pageTitle = SITENAME . " - Episode Edit";
            $this->view->render();
        } else {
            $this->go('home', 'login');
        }
    }

    public function adminDoEdit()
    {
        if (isset($_SESSION['userId']) && $_SESSION['userId']) {

            if (!isset($_POST['title']) || empty($_POST['title'])) {
                $_SESSION['err'] = 'All fields should be filled';
                $this->go('episode', 'adminList');
            }

            $episodeModel = $this->model('Episode');

            if ($episodeModel->edit($_POST['id'], $_POST['title'], $_POST['img'], $_POST['iframe'], $_POST['link'])) {
                $_SESSION['success'] = true;
                $this->go('episode', 'adminList');
            }

        } else {
            $this->go('home', 'login');
        }
    }

    public function adminDelete($id = 0)
    {
        if (isset($_SESSION['userId']) && $_SESSION['userId'] && $id > 0) {

            $episodeModel = $this->model('Episode');
            $episodeModel->delete($id);
            $this->go('episode', 'adminList');
        } else {
            $this->go('home', 'login');
        }
    }  
}