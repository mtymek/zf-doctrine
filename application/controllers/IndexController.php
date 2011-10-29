<?php

class IndexController extends Zend_Controller_Action
{    

    public function indexAction()
    {
        // create new user
        $user = new App_Model_User();
        $user->email = 'test@domain.tld';
        $user->password = sha1('password');
        $user->save();
    }


}

