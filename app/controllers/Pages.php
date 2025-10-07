<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */

class Pages extends Controller
{
    public function __construct()
    {
        //$this->pageModel = $this->model('Page');
    }

    public function Index($slug = null)
    {
        $this->view('pages/index');
        
    }
}
