<?php

$router->get('/course', ['middleware'=>'auth','uses'=>'CourseController@onAllSelect']) ;
$router->get('/courseHome', ['middleware'=>'auth','uses'=>'CourseController@onSelectHomePage']) ;
$router->get('/courseDetails/{courseId}', ['middleware'=>'auth','uses'=>'CourseController@onSelectDetails']) ;
$router->get('/footer', ['middleware'=>'auth','uses'=>'FooterController@onAllSelect']) ;
$router->post('/contact', ['middleware'=>'auth','uses'=>'ContactController@onContactSend']) ;

//video section
$router->get('/class', ['middleware'=>'auth','uses'=>'ClassController@onSelectClassData']) ;
$router->post('/class', ['middleware'=>'auth','uses'=>'ClassController@onNewClassData']) ;
$router->get('/subject', ['middleware'=>'auth','uses'=>'SubjectController@onNewSubjectData']) ;
$router->get('/subject/{classId}', ['middleware'=>'auth','uses'=>'SubjectController@onSelectSubjectDataFilterByClass']) ;
$router->post('/subject', ['middleware'=>'auth','uses'=>'SubjectController@onNewSubjectData']) ;
$router->get('/chapter/{subId}', ['middleware'=>'auth','uses'=>'ChapterController@onSelectChapterDataFilterBySubject']) ;
$router->post('/chapter', ['middleware'=>'auth','uses'=>'ChapterController@onNewChapterData']) ;
$router->get('/video/{chapId}', ['middleware'=>'auth','uses'=>'VideoController@onSelectVideoeDataFilterByChapter']) ;
$router->post('/video', ['middleware'=>'auth','uses'=>'VideoController@onNewVideoData']) ;


//others
$router->get('/others/{name}', ['middleware'=>'auth','uses'=>'OthersController@onSelectOthersData']) ;

//notice
$router->get('/notice', ['middleware'=>'auth','uses'=>'NoticeController@onAllSelect']) ;

//blog
$router->get('/blog', ['middleware'=>'auth','uses'=>'BlogController@onAllSelect']) ;
$router->get('/blog/{blogId}', ['middleware'=>'auth','uses'=>'BlogController@onSelectDetails']) ;
$router->get('/blog-detail', ['middleware'=>'auth','uses'=>'BlogController@onSelectHomePage']) ;
