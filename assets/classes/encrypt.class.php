<?php
// Copyright 2018, R. Bruce Pitt Rights Reserved.

// This class contains all of the encyrption keys and
// calls to decrypt data stored in the various hashs
// and database. 
// 
// Obscures the encrypt and decrypt if it needs to be changed
//

class encryptClass
{
  
    // AES is used by the U.S. gov't to encrypt top secret documents.
    private $encryptionMethod;
    private $secretHash;
    private $iv;
    private $raw_output;

    /**
     * S__construct
     * @abstract - setups the encryption parameters
     * Note: that if the session has already started, session_start() does nothing
     * @access public
     */
    public function __construct()
    {
        $this->encryptionMethod = "AES-256-CBC";
        $this->secretHash       = md5('RISKSENSECAANES');
        // R.BrucePitt, Justyna La Pay, Amanda Otter:Create Agri-CulturaNetwork, ThornBird/Mccuune
        $this->iv               = 'NHSAHGMAGRBP14\0';   // Must be 16 including '\0'
        $this->raw_output       = false;
    } // end method __construct
    
    /**
     * encrypt()
     * @abstract - returns an encrypted string
     * @param string textToEncrypt - value to be encyrpted
     * @return string - encyrpted string
     * @access public
     */    
    public function encrypt($textToEncrypt)
    {
        if (!empty($textToEncrypt))
        {
            return ( openssl_encrypt($textToEncrypt,
                     $this->encryptionMethod,
                     $this->secretHash,
                     $this->raw_output,
                     $this->iv));
        }
       
        return ('');
    } // end method encrypt
    
    /**
     * decrypt()
     * @abstract - decrypt cypher from encyrpt
     * @param string $textToDecrypt - hashed string
     * @return string decrypted string
     */
    public function decrypt($textToDecrypt)
    {
        if (!empty($textToDecrypt   ))
        {        
            return ( openssl_decrypt($textToDecrypt,
                     $this->encryptionMethod,
                     $this->secretHash,
                     $this->raw_output,
                     $this->iv));
        }
        
        return ('');

    } // end method decrypt
    
    /**
     * getSecretHash()
     * @abstract - returns secret has value for system
     * @return string - The SecretHash
     */
    
    public function getSecretHash()
    {
        return ($this->secretHash);
    } // end method getSecretHash
 
} // end class encyrptClass 