<?php

namespace controllers;

use MidiChloriansPHP\mvc\Controller;
use MidiChloriansPHP\Security;
use MidiChloriansPHP\network\Http;
use MidiChloriansPHP\utility\Cookie;

class Index extends Controller {

    public function __construct() {
        $this->tpl->setFile('layouts' . DS . 'Index' . DS . 'index.tpl.php');

        //for tests
        //$article = $this->model->factoryRepostery('article')->find(10);
        //$this->model->delete($article);
        //$article = $this->model->factoryRepostery('article')->find(10);
        //$article->title = 'test';
        //$this->model->save($article);
        //$article = $this->model->factoryEntity('article');
        //$article2 = $this->model->factoryEntity('article');
        //\MidiChloriansPHP\Debugger::dump($article);
        //\MidiChloriansPHP\Debugger::dump($this->model->countEntities());
        //$this->model->attach($article);
        //\MidiChloriansPHP\Debugger::dump($this->model->countEntities());
        //$this->model->attach($article);
        //$article->title = 'test';
        //$this->model->attach($article);
        //$this->model->attach($article2);
        //$this->model->delete($article);
        //\MidiChloriansPHP\Debugger::dump($this->model->delete());
        //\MidiChloriansPHP\Debugger::dump($this->model->countEntities());
        //$this->model->flush();
        //\MidiChloriansPHP\Debugger::dump($article->getRepostery()->getDatabase());
        //\MidiChloriansPHP\Debugger::dump($article, true);
    }

    public function language($language) {
        if (!is_string($language))
            $language = (string) $language;

        $this->session->add('language', $language, true, false);
        $this->notifySuccess('Language updated');

        //create cookie
        new Cookie('language', $language, true, Cookie::EXPIRE_TIME_INFINITE, str_replace(Http::getServer('SERVER_NAME'), '', $this->router->getHost()));
    }

    public function captcha($securityName, $type) {
        $captcha = Security::getSecurity($securityName);
        if (!$captcha)
            $this->router->show404(true);

        if ($type == 'refresh') {
            $this->setAjaxController();
            $captcha->flush();
            $this->addAjaxDatas('imageUrl', $captcha->get('image', true));
            $this->addAjaxDatas('audioUrl', $captcha->get('audio', true));
        } else {
            if ($type == 'image') {
                if (!$captcha->getImage())
                    $this->router->show404(true);
                $captcha->get('image');
            } elseif ($type == 'audio') {
                if (!$captcha->getAudio())
                    $this->router->show404(true);
                $captcha->get('audio');
            } else
                $this->router->show404(true);

            $this->setAutoCallDisplay(false);
        }
    }

}

?>