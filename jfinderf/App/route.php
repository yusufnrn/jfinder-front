<?php

App::getAction('/','/', false);
App::getAction('','', false);
App::getAction('/index','/index/index', false, 'frontend');
App::getAction('/index/([0-9a-zA-Z_]+)','/index/index/([0-9a-zA-Z_]+)', false, 'frontend');


// LOGIN AND PROFILE Operations Routes
//App::getAction('/profile', '/dashboard/index', false, 'backend');
App::getAction('/login','/login/login', false, 'backend');
App::postAction('/session','/login/session',false, 'backend');
App::getAction('/logout','/logout/logout', false, 'backend');