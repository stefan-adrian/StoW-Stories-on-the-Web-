<?php

class Read_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
                $this->run();
	}

	public function run()
	{
            
            Session::init();
            $text=Session::get('text');
            $page=Session::get('page');
            
            $url=$_SERVER['REQUEST_URI'];
            parse_str( parse_url( $url, PHP_URL_QUERY), $array );
            if($array['page'] != null)
            {   
                
                $page=$array['page'];
                Session::set('page',$page);
                
            }
            
            $pageText=substr($text,($page-1)*5000,5000);
            
            
            Session::set('pageText',$pageText);
            
            
            
            	
	}
	
}