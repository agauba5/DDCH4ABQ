<?php
/* Copyright 2018, Helping Out Us, All Rights Reserved */

if (!isset($lowerLevel))
{
	$lowerLevel = '';
}

/**
 * UserProfile Database Data Class
 * @abstract - Holds the data for the user_profile Table
 * @access public
*/

class dataUserProfileClass
{
	// Table: user_profile
	public $idUser_Profile;		// BIGINT UNSIGNED NOT-NULL AUTO_INCREMENT 
	public $idUserLogin;		// BIGINT UNSIGNED NOT-NULL 
	public $eName;		// VARCHAR(200) NOT-NULL 
	public $Giver;		// TINYINT NOT-NULL DEFAULT-0 
	public $Looker;		// TINYINT NOT-NULL DEFAULT-0 
	public $eDescription;		// VARCHAR(1024) NULL 
	public $eAddress;		// VARCHAR(200) NULL 
	public $eCity;		// VARCHAR(200) NULL 
	public $eState;		// VARCHAR(200) NULL 
	public $eZip;		// VARCHAR(200) NULL 
	public $ePhone_Number;		// VARCHAR(200) NULL 
	public $eEmail;		// VARCHAR(200) NULL 
	public $Foundation;		// TINYINT NOT-NULL DEFAULT-0 

	public $lastSQLUpdateString;		// String that has the updated data fields with ids - update only
	public $lastSQLExecuteArray;		// Array that contains all of the actual values update/insert
	public $lastSQLInsertString;		// String used for insert
	public $lastSQLValuesString;
	private $_dbR;
	private $_dbW;

	public function __construct($dbR, $dbW)
	{
		$this->_dbR = $dbR;
		$this->_dbW = $dbW;

		$this->idUser_Profile = 0;
		$this->idUserLogin = 0;
	}  // end function __construct

	public function setPDO($dbR, $dbW)
	{
		$this->_dbR = $dbR;
		$this->_dbW = $dbW;
	}  // end function setPDO

	public function saveValues($dbResult)
	{
		$this->idUser_Profile = $dbResult['idUser_Profile'];
		$this->idUserLogin = $dbResult['idUserLogin'];
		$this->eName = $dbResult['eName'];
		$this->Giver = $dbResult['Giver'];
		$this->Looker = $dbResult['Looker'];
		$this->eDescription = $dbResult['eDescription'];
		$this->eAddress = $dbResult['eAddress'];
		$this->eCity = $dbResult['eCity'];
		$this->eState = $dbResult['eState'];
		$this->eZip = $dbResult['eZip'];
		$this->ePhone_Number = $dbResult['ePhone_Number'];
		$this->eEmail = $dbResult['eEmail'];
		$this->Foundation = $dbResult['Foundation'];
	} // end function saveValues

	public function didDataChange($updUserProfileObj)
	{
		if ($this->idUser_Profile != $updUserProfileObj->idUser_Profile)
		{
			return (true);
		}
		if ($this->idUserLogin != $updUserProfileObj->idUserLogin)
		{
			return (true);
		}
		if ($this->eName != $updUserProfileObj->eName)
		{
			return (true);
		}
		if ($this->Giver != $updUserProfileObj->Giver)
		{
			return (true);
		}
		if ($this->Looker != $updUserProfileObj->Looker)
		{
			return (true);
		}
		if ($this->eDescription != $updUserProfileObj->eDescription)
		{
			return (true);
		}
		if ($this->eAddress != $updUserProfileObj->eAddress)
		{
			return (true);
		}
		if ($this->eCity != $updUserProfileObj->eCity)
		{
			return (true);
		}
		if ($this->eState != $updUserProfileObj->eState)
		{
			return (true);
		}
		if ($this->eZip != $updUserProfileObj->eZip)
		{
			return (true);
		}
		if ($this->ePhone_Number != $updUserProfileObj->ePhone_Number)
		{
			return (true);
		}
		if ($this->eEmail != $updUserProfileObj->eEmail)
		{
			return (true);
		}
		if ($this->Foundation != $updUserProfileObj->Foundation)
		{
			return (true);
		}
		return (false);
	} // end function didDataChange

	public function genSQLUpdates($updUserProfileObj)
	{
		$sql = '';
		$this->lastSQLExecuteArray  = array();
		$itemAhead  = false;

		if ($this->idUser_Profile != $updUserProfileObj->idUser_Profile)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`idUser_Profile` = :da1';
			$this->lastSQLExecuteArray[':da1'] = $updUserProfileObj->idUser_Profile;
			$itemAhead = true;
		}
		if ($this->idUserLogin != $updUserProfileObj->idUserLogin)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`idUserLogin` = :da2';
			$this->lastSQLExecuteArray[':da2'] = $updUserProfileObj->idUserLogin;
			$itemAhead = true;
		}
		if ($this->eName != $updUserProfileObj->eName)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eName` = :da3';
			$this->lastSQLExecuteArray[':da3'] = $updUserProfileObj->eName;
			$itemAhead = true;
		}
		if ($this->Giver != $updUserProfileObj->Giver)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`Giver` = :da4';
			$this->lastSQLExecuteArray[':da4'] = $updUserProfileObj->Giver;
			$itemAhead = true;
		}
		if ($this->Looker != $updUserProfileObj->Looker)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`Looker` = :da5';
			$this->lastSQLExecuteArray[':da5'] = $updUserProfileObj->Looker;
			$itemAhead = true;
		}
		if ($this->eDescription != $updUserProfileObj->eDescription)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eDescription` = :da6';
			$this->lastSQLExecuteArray[':da6'] = $updUserProfileObj->eDescription;
			$itemAhead = true;
		}
		if ($this->eAddress != $updUserProfileObj->eAddress)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eAddress` = :da7';
			$this->lastSQLExecuteArray[':da7'] = $updUserProfileObj->eAddress;
			$itemAhead = true;
		}
		if ($this->eCity != $updUserProfileObj->eCity)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eCity` = :da8';
			$this->lastSQLExecuteArray[':da8'] = $updUserProfileObj->eCity;
			$itemAhead = true;
		}
		if ($this->eState != $updUserProfileObj->eState)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eState` = :da9';
			$this->lastSQLExecuteArray[':da9'] = $updUserProfileObj->eState;
			$itemAhead = true;
		}
		if ($this->eZip != $updUserProfileObj->eZip)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eZip` = :da10';
			$this->lastSQLExecuteArray[':da10'] = $updUserProfileObj->eZip;
			$itemAhead = true;
		}
		if ($this->ePhone_Number != $updUserProfileObj->ePhone_Number)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`ePhone_Number` = :da11';
			$this->lastSQLExecuteArray[':da11'] = $updUserProfileObj->ePhone_Number;
			$itemAhead = true;
		}
		if ($this->eEmail != $updUserProfileObj->eEmail)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eEmail` = :da12';
			$this->lastSQLExecuteArray[':da12'] = $updUserProfileObj->eEmail;
			$itemAhead = true;
		}
		if ($this->Foundation != $updUserProfileObj->Foundation)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`Foundation` = :da13';
			$this->lastSQLExecuteArray[':da13'] = $updUserProfileObj->Foundation;
			$itemAhead = true;
		}
		$this->lastSQLUpdateString = $sql;
		return $sql;
	} // end function genSQLUpdates

	public function genChangeLogEntry($updUserProfileObj)
	{
		$changeLog  = 'user_profile: ';
		 $itemAhead  = false;

		if ($this->idUser_Profile != $updUserProfileObj->idUser_Profile)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'idUser_Profile: Was:['. $this->idUser_Profile. '] New:[' . $updUserProfileObj->idUser_Profile.']';
			$itemAhead = true;
		}
		if ($this->idUserLogin != $updUserProfileObj->idUserLogin)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'idUserLogin: Was:['. $this->idUserLogin. '] New:[' . $updUserProfileObj->idUserLogin.']';
			$itemAhead = true;
		}
		if ($this->eName != $updUserProfileObj->eName)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eName: Was:['. $this->eName. '] New:[' . $updUserProfileObj->eName.']';
			$itemAhead = true;
		}
		if ($this->Giver != $updUserProfileObj->Giver)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'Giver: Was:['. $this->Giver. '] New:[' . $updUserProfileObj->Giver.']';
			$itemAhead = true;
		}
		if ($this->Looker != $updUserProfileObj->Looker)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'Looker: Was:['. $this->Looker. '] New:[' . $updUserProfileObj->Looker.']';
			$itemAhead = true;
		}
		if ($this->eDescription != $updUserProfileObj->eDescription)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eDescription: Was:['. $this->eDescription. '] New:[' . $updUserProfileObj->eDescription.']';
			$itemAhead = true;
		}
		if ($this->eAddress != $updUserProfileObj->eAddress)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eAddress: Was:['. $this->eAddress. '] New:[' . $updUserProfileObj->eAddress.']';
			$itemAhead = true;
		}
		if ($this->eCity != $updUserProfileObj->eCity)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eCity: Was:['. $this->eCity. '] New:[' . $updUserProfileObj->eCity.']';
			$itemAhead = true;
		}
		if ($this->eState != $updUserProfileObj->eState)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eState: Was:['. $this->eState. '] New:[' . $updUserProfileObj->eState.']';
			$itemAhead = true;
		}
		if ($this->eZip != $updUserProfileObj->eZip)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eZip: Was:['. $this->eZip. '] New:[' . $updUserProfileObj->eZip.']';
			$itemAhead = true;
		}
		if ($this->ePhone_Number != $updUserProfileObj->ePhone_Number)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'ePhone_Number: Was:['. $this->ePhone_Number. '] New:[' . $updUserProfileObj->ePhone_Number.']';
			$itemAhead = true;
		}
		if ($this->eEmail != $updUserProfileObj->eEmail)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eEmail: Was:['. $this->eEmail. '] New:[' . $updUserProfileObj->eEmail.']';
			$itemAhead = true;
		}
		if ($this->Foundation != $updUserProfileObj->Foundation)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'Foundation: Was:['. $this->Foundation. '] New:[' . $updUserProfileObj->Foundation.']';
			$itemAhead = true;
		}
		return $changeLog;
	} // end function genChangeLogEntry

	public function genSQLInsert()
	{
		$sql  = '';
		$values  = '';
		$this->lastSQLExecuteArray = array();

		$sql .= '`idUserLogin`';
		$values .= ':da1';
		$this->lastSQLExecuteArray[':da1'] = $this->idUserLogin;
		$sql .= ', '; $values .= ', ';
		$sql .= '`eName`';
		$values .= ':da2';
		$this->lastSQLExecuteArray[':da2'] = $this->eName;
		$sql .= ', '; $values .= ', ';
		$sql .= '`Giver`';
		$values .= ':da3';
		$this->lastSQLExecuteArray[':da3'] = $this->Giver;
		$sql .= ', '; $values .= ', ';
		$sql .= '`Looker`';
		$values .= ':da4';
		$this->lastSQLExecuteArray[':da4'] = $this->Looker;
		$sql .= ', '; $values .= ', ';
		$sql .= '`eDescription`';
		$values .= ':da5';
		$this->lastSQLExecuteArray[':da5'] = $this->eDescription;
		$sql .= ', '; $values .= ', ';
		$sql .= '`eAddress`';
		$values .= ':da6';
		$this->lastSQLExecuteArray[':da6'] = $this->eAddress;
		$sql .= ', '; $values .= ', ';
		$sql .= '`eCity`';
		$values .= ':da7';
		$this->lastSQLExecuteArray[':da7'] = $this->eCity;
		$sql .= ', '; $values .= ', ';
		$sql .= '`eState`';
		$values .= ':da8';
		$this->lastSQLExecuteArray[':da8'] = $this->eState;
		$sql .= ', '; $values .= ', ';
		$sql .= '`eZip`';
		$values .= ':da9';
		$this->lastSQLExecuteArray[':da9'] = $this->eZip;
		$sql .= ', '; $values .= ', ';
		$sql .= '`ePhone_Number`';
		$values .= ':da10';
		$this->lastSQLExecuteArray[':da10'] = $this->ePhone_Number;
		$sql .= ', '; $values .= ', ';
		$sql .= '`eEmail`';
		$values .= ':da11';
		$this->lastSQLExecuteArray[':da11'] = $this->eEmail;
		$sql .= ', '; $values .= ', ';
		$sql .= '`Foundation`';
		$values .= ':da12';
		$this->lastSQLExecuteArray[':da12'] = $this->Foundation;

		$this->lastSQLInsertString = $sql;
		$this->lastSQLValuesString = $values;
		return $sql;
	} // end function genSQLInsert

	public function readOne($readIdent)
	{
		if ($this->_dbR == null)
		{
			return (0);
		}
		try
		{
			$sql  = 'SELECT * FROM `user_profile` ';
			$sql .= 'WHERE (`idUser_Profile` = :rID) LIMIT 1;';
			$stmt = $this->_dbR->prepare($sql);
			$stmt->execute(array(':rID' => $readIdent));
			$row  = $stmt->fetch(PDO::FETCH_ASSOC);
			$stmt->closeCursor();
			unset($stmt);
			if (empty($row))
			{
				return (0);
			}

			$this->saveValues($row);
			return ($this->idUser_Profile);
		} // End try
		catch (PDOException $e)
		{
			error_log('readOne::user_profile Database Error: ' . $e->getMessage() . PHP_EOL); 
			return (0);
		} // End catch
	} // end function readOne()

	public function updateOne($updatedRecord)
	{
		if ($this->_dbW == null)
		{
			return (false);
		}
		$setSql = $this->genSQLUpdates($updatedRecord);
		try
		{
			$sql = 'UPDATE `user_profile` SET '.$setSql.' ';
			$sql.= 'WHERE (`idUser_Profile` = ' . $this->idUser_Profile . ');';
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute($this->lastSQLExecuteArray);
			$stmt->closeCursor();
			unset($stmt);
		} // End try
		catch (PDOException $e)
		{
			error_log("updateOne::user_profile Database Error: " . $e->getMessage() . PHP_EOL); 
		} // End catch
	} // end function updateOne()

	public function addThisOne() // returns new record number
	{
		if ($this->_dbW == null)
		{
			return (false);
		}
		$setSql = $this->genSQLInsert();
		try
		{  // Insert SQL
			$sql = "INSERT INTO `user_profile` ( ". $setSql . " ) VALUES ( ". $this->lastSQLValuesString . ");";
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute($this->lastSQLExecuteArray);
			$lastId = $this->_dbW->lastInsertId();
			$stmt->closeCursor();
			unset($stmt);
			return($lastId);
		} // End try
		catch (PDOException $e)
		{
			error_log("addThisOne::user_profile Database Error: " . $e->getMessage() . PHP_EOL); 
			return(0);
		} // End catch
	} // end function addOneuser_profile

	public function delThisOne()
	{
		if ($this->_dbW == null)
		{
			return (false);
		}
		if ($this->idUser_Profile == 0)
		{
			return(0);
		}

		try
		{  // Delete SQL
			$sql = "DELETE FROM `user_profile` WHERE  ( `idUser_Profile` = " . $this->idUser_Profile. " ); ";
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute();
			$stmt->closeCursor();
			unset($stmt);
			return($this->idUser_Profile);
		} // End try
		catch (PDOException $e)
		{
			error_log("delThisOne::user_profile Database Error: " . $e->getMessage() . PHP_EOL);
			return(0);
		} // End catch
	} // end function delThisOne()

	public function encodeToArray() // returns array with shorter names 
	{
		$returnArray = array();
		$returnArray["idUsrPro"] = $this->idUser_Profile;
		$returnArray["idUsrLog"] = $this->idUserLogin;
		$returnArray["eNam"] = $this->eName;
		$returnArray["Giv"] = $this->Giver;
		$returnArray["Loo"] = $this->Looker;
		$returnArray["eDes"] = $this->eDescription;
		$returnArray["eAddr"] = $this->eAddress;
		$returnArray["eCit"] = $this->eCity;
		$returnArray["eSta"] = $this->eState;
		$returnArray["eZip"] = $this->eZip;
		$returnArray["ePhoNum"] = $this->ePhone_Number;
		$returnArray["eEma"] = $this->eEmail;
		$returnArray["Fou"] = $this->Foundation;
		return ($returnArray);
	} // end function encodeToArray()

	public function decodeFromArray(&$rxArray) // places values into local storage 
	{
		$this->idUser_Profile = $rxArray["idUsrPro"];
		$this->idUserLogin = $rxArray["idUsrLog"];
		$this->eName = $rxArray["eNam"];
		$this->Giver = $rxArray["Giv"];
		$this->Looker = $rxArray["Loo"];
		$this->eDescription = $rxArray["eDes"];
		$this->eAddress = $rxArray["eAddr"];
		$this->eCity = $rxArray["eCit"];
		$this->eState = $rxArray["eSta"];
		$this->eZip = $rxArray["eZip"];
		$this->ePhone_Number = $rxArray["ePhoNum"];
		$this->eEmail = $rxArray["eEma"];
		$this->Foundation = $rxArray["Fou"];
	} // end function decodeFromArray()


} // end class dataUserProfileClass
