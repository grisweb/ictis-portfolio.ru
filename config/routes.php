<?php

use ictis_portfolio\Router;

Router::add('^projects/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Project', 'action' => 'view']);
Router::add('^news/(?P<id>[a-z0-9-]+)/?$', ['controller' => 'NewsItem', 'action' => 'view']);
Router::add('^mentors/(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Mentor', 'action' => 'view']);
Router::add('^login$', ['controller' => 'User', 'action' => 'login']);
Router::add('^logout$', ['controller' => 'User', 'action' => 'logout']);
Router::add('^signup$', ['controller' => 'User', 'action' => 'signup']);

//default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
