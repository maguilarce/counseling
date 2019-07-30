<?php


Route::get("/", "AdminHomeController@dashboard");

//SLIP Sessions Routes
Route::get("/create-session", "SlipSessionController@createSession");
Route::get("/view-sessions", "SlipSessionController@viewSession");
Route::get("/update-session", "SlipSessionController@updateSession");
Route::get("/delete-session", "SlipSessionController@deleteSession");


//Students Routes
Route::get("/view-students", "StudentSessionController@viewStudents");
Route::get("/add-student", "StudentSessionController@addStudent");
Route::get("/delete-student", "StudentSessionController@deleteStudent");

//Communication Routes
Route::get("/email-student", "StudentSessionController@emailStudent");
Route::get("/email-students", "StudentSessionController@emailStudents");
