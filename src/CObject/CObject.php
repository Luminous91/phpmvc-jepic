<?php
/**
* Holding a instance of CJepic to enable use of $this in subclasses.
*
* @package JepicCore
*/
class CObject {

   protected $je;
   protected $config;
   protected $request;
   protected $data;
   protected $db;
   protected $views;
   protected $session;
   protected $user;

   /**
   * Constructor, can be instantiated by sending in the $je reference.
   */
  protected function __construct($je=null) {
    if(!$je) {
      $je = CJepic::Instance();
    } 
    $this->je       = &$je;
    $this->config   = &$je->config;
    $this->request  = &$je->request;
    $this->data     = &$je->data;
    $this->db       = &$je->db;
    $this->views    = &$je->views;
    $this->session  = &$je->session;
    $this->user     = &$je->user;
  }
  
 /**
	 * Wrapper for same method in CJepic. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->je->RedirectTo($urlOrController, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CJepic. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
    $this->je->RedirectToController($method, $arguments);
  }


	/**
	 * Wrapper for same method in CJepic. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->je->RedirectToControllerMethod($controller, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CJepic. See there for documentation.
	 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->je->AddMessage($type, $message, $alternative);
  }


	/**
	 * Wrapper for same method in CJepic. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->je->CreateUrl($urlOrController, $method, $arguments);
  }



}