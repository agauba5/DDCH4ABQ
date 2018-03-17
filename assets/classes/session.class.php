<?php

/* Copyright (c) 2018  R. Bruce Pitt, All Rights Reserved */

/**
 * A wrapper around PHP's session functions - example
 * <code>
 * $session = new sessionClass();
 * $session->set('key','mydata');
 * echo ( $session->get('key'); // Displays 'mydata'
 * </code>
 * @access public
 */

class sessionClass
{
    /**
     * S__construct
     * @abstract - Starts the session with session_start()
     * Note: that if the session has already started, session_start() does nothing
     * @access public
     */
    public function __construct()
    {
        //prepended @ sign to supress Session Already Started Warning in Error Log
        @session_start(); 
    } // end method __construct

    /**
     * set
     * @abstract Sets a session variable
     * @param string name of variable
     * @param mixed value of variable
     * @return void
     * @access public
    */
    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
		//error_log('SESSION: SET: ' . print_r($_SERVER["SCRIPT_NAME"],true) . ' URI:' . print_r($_SERVER["REQUEST_URI"],true). ' Set: ' . $name . ' = ' . $value . PHP_EOL);
	
    } // end method set

    /**
     * get
     * @abstract - Fetches a session variable
     * @param string name of variable
     * @return mixed value of session varaible
     * @access public
     */
    public function get($name)
    {
        if (isset($_SESSION[$name]))
        {
            return $_SESSION[$name];
        }
        else
        {
            return false;
        }
    } // end method get
    
    /**
     * exists
     * @abstract - Sees if a variable is set
     * @param string name of variable
     * @return mixed value of session varaible
     * @access public
     */
    public function exists($name)
    {
        return (isset($_SESSION[$name]));

    } // end method existst    
  
    /**
     * del
     * @abstract - unsets a session variable
     * @param string name of variable
     * @return void
     * @access public
     */
    public function del($name)
    {
        if (isset($_SESSION[$name]))
        {
            unset($_SESSION[$name]);
        }
    } // end method del
    
    /**
     * pop
     * @abstract - gets the value of a session variable, then unsets a session variable
     * @param string name of variable
     * @return void
     * @access public
     */
    public function pop($name)
    {
        $retValue = false;
        if (isset($_SESSION[$name]))
        {
            $retValue = $_SESSION[$name];
            unset($_SESSION[$name]);
        }
        
        return ($retValue);
    } // end method del    

    /**
     * Destroys the whole session
     * @return void
     * @access public
     */
    public function destroy()
    { 
        $_SESSION = array();
        session_destroy();
		/*try
		{
			session_regenerate_id();
		}
		catch (Exception $e)
		{
			return;
		}*/
    } // end method destroy
}