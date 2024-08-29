  <?php

  use CodeIgniter\Router\RouteCollection;

  /**
  * @var RouteCollection $routes
  */



  $routes->get('/', 'User::logout');

  $routes->get('/user', 'User::index', ['filter' => "AuthFilter"]);

  $routes->get('/login', 'User::login', ['filter' => "NoAuthFilter"]);
  $routes->post('/login', 'User::login');

  $routes->get('/logout', 'User::logout');



  $routes->get('user/add', 'User::add');
  $routes->post('user/add', 'User::add');

  $routes->get('user/edit/(:any)', 'User::edit/$1');
  $routes->post('user/edit/(:any)', 'User::edit/$1');

  $routes->get('user/delete/(:any)', 'User::delete/$1');
  $routes->post('user/delete/(:any)', 'User::delete/$1');

  $routes->get('user/userslist', 'User::userslist');

  $routes->get('course/courseslist', 'Courses::course'); 

  $routes->get('course/course_add', 'Courses::add');    
  $routes->post('course/course_add', 'Courses::add');    

  $routes->get('course/course_delete/(:any)', 'Courses::delete/$1');    
  $routes->post('course/course_delete/(:any)', 'Courses::delete/$1'); 

  $routes->get('course/course_edit/(:any)', 'Courses::edit/$1');    
  $routes->post('course/course_edit/(:any)', 'Courses::edit/$1'); 

  $routes->get('subject/subjectslist', 'SubjectController::subject'); 
  $routes->post('subject/subjectslist', 'SubjectController::subject');

  $routes->get('prospectus/prospectuslist', 'Prospectus::index'); 
  $routes->post('prospectus/prospectuslist', 'Prospectus::index');