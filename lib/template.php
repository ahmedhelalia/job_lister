<?php
class Template
{
    // Path to the template
    protected $template;
    // vars Passed in
    protected $vars = array();

    // Constructor
    public function __construct($template)
    {
        $this->template = $template;
    }

    // a get method to get the template variables
    public function __get($key)
    {
        return $this->vars[$key];
    }

    //  a set method to set the template variables
    public function __set($key,$value){
        $this->vars[$key] = $value;
    }

    public function __toString()
    {
        // Ensure the template path is set and valid
        if(empty($this->template) || !file_exists($this->template)){
            throw new Exception("This file doesn't exist");
        }
        // extract function return the array as variable and value where variable is the key and the value is value of the key
        extract($this->vars);
        // Ensure chdir() has a valid directory
        $templateDir = dirname($this->template);
        if(!empty($templateDir) && is_dir($templateDir)){
            chdir($templateDir);
        }else{
            throw new Exception("This template directory is invalid or not set");
        }
        ob_start();
        include basename($this->template);
        return ob_get_clean();
    }
}