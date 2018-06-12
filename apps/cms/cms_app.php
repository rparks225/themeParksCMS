<?php
require_once 'routes_class.php';
//Starts CMS app
class cms{
	
	protected $controller = 'home';
	protected $method = 'index';
	protected $param = array();
	
	public function spa(){
			
		$url = $this->parseUrl();	
	
  if(file_exists('apps/cms/controllers/'.$url[0].'_controller.php')){
	  
	  $this->controller = $url[0];
	  unset($url[0]);
	  
	  }
	  
	  require_once 'apps/cms/controllers/'.$this->controller.'_controller.php';
	  $this->controller = new $this->controller;
	  
	  if(isset($url[1])){
		  
		  if(method_exists($this->controller, $url[1])){
			  
			  $this->method = $url[1];
			  unset($url[1]);
			  
			  }
		  
		  }
		  
		  $this->param = $url ? array_values($url) : array();
		  
		 call_user_func_array(array($this->controller, $this->method), $this->param);

	}
	
//Sanitizes the URL into array 0 to infinite
public function parseUrl(){
	
	if (isset ($_GET['url'])){
		
		return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		
		}
	
	}	

}