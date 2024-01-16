<?php
session_start();
App::getAction('/','/', false);
App::getAction('','', false);
App::getAction('/index','/index/index', false, 'frontend');
App::getAction('/index/([0-9a-zA-Z_]+)','/index/index/([0-9a-zA-Z_]+)', false, 'frontend');

