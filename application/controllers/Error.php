<?php

namespace controllers;

use MidiChloriansPHP\Language;
use MidiChloriansPHP\mvc\Controller;
use MidiChloriansPHP\error\ErrorManager;
use MidiChloriansPHP\error\ExceptionManager;

class Error extends Controller {

    public function __construct() {
        $this->tpl->setFile('layouts' . DS . 'error.tpl.php');
    }

    public function show($code) {
        $code = (int) $code;
        switch ($code) {
            case 400:
                //ErrorDocument 400 /error/400.html Bad Request La syntaxe de la requête est erronée
                $this->tpl->setVar('errorInfo', array('code' => '400', 'message' => $this->language->__('e_400')), false, true)->setVar('title', $this->language->__('e_400'), false, true);
                break;
            case 401:
                //ErrorDocument 401 /error/401.html Unauthorized Une authentification est nécessaire pour accéder à la ressource
                $this->tpl->setVar('errorInfo', array('code' => '401', 'message' => $this->language->__('e_401')), false, true)->setVar('title', $this->language->__('e_401'), false, true);
                break;
            case 403:
                //ErrorDocument 403 /error/403.html Forbidden L’authentification est refusée. Contrairement à l’erreur 401, aucune demande d’authentification ne sera faite
                $this->tpl->setVar('errorInfo', array('code' => '403', 'message' => $this->language->__('e_403')), false, true)->setVar('title', $this->language->__('e_403'));
                break;
            case 405:
                //ErrorDocument 405 /error/405.html Method Not Allowed Méthode de requête non autorisée
                $this->tpl->setVar('errorInfo', array('code' => '405', 'message' => $this->language->__('e_405')), false, true)->setVar('title', $this->language->__('e_405'), false, true);
                break;
            case 500:
                //ErrorDocument 500 /error/500.html Internal Server Error Erreur interne du serveur
                $this->tpl->setVar('errorInfo', array('code' => '500', 'message' => $this->language->__('e_500')), false, true)->setVar('title', $this->language->__('e_500'), false, true);
                break;
            case 502:
                //ErrorDocument 502 /error/502.html Bad Gateway Mauvaise réponse envoyée à un serveur intermédiaire par un autre serveur.
                $this->tpl->setVar('errorInfo', array('code' => '502', 'message' => $this->language->__('e_502')), false, true)->setVar('title', $this->language->__('e_502'), false, true);
                break;
            case 503:
                //ErrorDocument 503 /error/503.html Service Unavailable Service temporairement indisponible ou en maintenance
                $this->tpl->setVar('errorInfo', array('code' => '503', 'message' => $this->language->__('e_503')), false, true)->setVar('title', $this->language->__('e_503'), false, true);
                break;
            case 404:
            default:
                //ErrorDocument 404 /error/404.html Not Found  Ressource non trouvée
                $this->tpl->setVar('errorInfo', array('code' => '404', 'message' => $this->language->__('e_404')), false, true)->setVar('title', $this->language->__('e_404'), false, true);
                break;
        }
    }

    public function debugger($isException) {
        if ($isException) {
            $ex = ExceptionManager::getInstance()->getException();
            $this->tpl->setVar('exception', $ex, false, true);
            $this->tpl->setFile('layouts' . DS . 'debugException.tpl.php');
        } else {
            $err = ErrorManager::getInstance()->getError();
            $this->tpl->setVar('error', $err, false, true);
            $this->tpl->setFile('layouts' . DS . 'debugError.tpl.php');
        }
    }

}

?>