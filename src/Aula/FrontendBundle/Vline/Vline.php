<?php
/**
 * JSON Web Token implementation
 *
 * Simple implementation of the vLine authentication process
 *
 */
namespace Aula\FrontendBundle\Vline;

class Vline{
	private $serviceID = "bernardo";
	private $apiSecret = "ncSC6R-JB30kjP3X1ra71BXL8PqVDlTdW_Q7E8IpTcA";
	private $userID;
	private $userDisplayName;
	private $jwt;
	
	
	/**
     * @param string      $userID    The user ID
     *
     * @return void
     */
	function setUser($userID, $userDisplayName){
		$this->userID = $userID;	
		$this->userDisplayName = $userDisplayName;
		//$this->userID = 1;	
		//$this->userDisplayName = 'admin';

			
	}
	
	
	/**
     * @return void 
     */
	function init(){
		$expiry = 48 * 60 * 60;
		$sub = $this->serviceID. ":" . $this->userID;
		$exp = time() + $expiry;
		$apisecret = $this->apiSecret;
		$apiSecretKey = JWT::urlsafeB64Decode($apisecret);

		$payload = array(
			"sub" => $sub,
			"iss" => $this->serviceID,
			"exp" => $exp
		);
		
		$this->jwt = JWT::encode($payload, $apiSecretKey);	
	}
	
	
	/**
     * @return jwt  
     */
	function getJWT(){
		return $this->jwt;	
	}
	
	
	/**
     * @return serviceID  
     */
	function getServiceID(){
		return $this->serviceID;	
	}
	
	/**
     * @return user ID
     */
	function getUserID(){
		return $this->userID;
	}
	
	
	/**
     * @return user display name
     */
	function getUserDisplayName(){
		return $this->userDisplayName;
	}
}
?>
