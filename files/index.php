<?php

require('app/app.php');

// $data = get_data();
$data = get_terms();


// $view_bag = [];

// $view_bag['title'] = 'This is the Title';

$view_bag = [
    'title' => 'Glossary List'
];


view('index', $data);