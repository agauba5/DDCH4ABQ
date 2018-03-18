<?php
/* Copyright 2018, Helping Out Us, All Rights Reserved */

if (!isset($lowerLevel))
{
	$lowerLevel = '';
}

/**
 * UserLogin Database Data Class
 * @abstract - Holds the data for the user_login Table
 * @access public
*/

class dataUserLoginClass
{
	// Table: user_login
	public $idUserLogin;		// BIGINT UNSIGNED NOT-NULL AUTO_INCREMENT 
	public $eLogin_Id;		// VARCHAR(100) NOT-NULL 
	public $ePassword;		// VARCHAR(100) NOT-NULL 
	public $eDisplay_Name;		// VARCHAR(100) NULL 
	public $Accepted_Terms;		// TINYINT NOT-NULL DEFAULT-0 

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

		$this->idUserLogin = 0;
	}  // end function __construct

	public function setPDO($dbR, $dbW)
	{
		$this->_dbR = $dbR;
		$this->_dbW = $dbW;
	}  // end function setPDO

	public function saveValues($dbResult)
	{
		$this->idUserLogin = $dbResult['idUserLogin'];
		$this->eLogin_Id = $dbResult['eLogin_Id'];
		$this->ePassword = $dbResult['ePassword'];
		$this->eDisplay_Name = $dbResult['eDisplay_Name'];
		$this->Accepted_Terms = $dbResult['Accepted_Terms'];
	} // end function saveValues

	public function didDataChange($updUserLoginObj)
	{
		if ($this->idUserLogin != $updUserLoginObj->idUserLogin)
		{
			return (true);
		}
		if ($this->eLogin_Id != $updUserLoginObj->eLogin_Id)
		{
			return (true);
		}
		if ($this->ePassword != $updUserLoginObj->ePassword)
		{
			return (true);
		}
		if ($this->eDisplay_Name != $updUserLoginObj->eDisplay_Name)
		{
			return (true);
		}
		if ($this->Accepted_Terms != $updUserLoginObj->Accepted_Terms)
		{
			return (true);
		}
		return (false);
	} // end function didDataChange

	public function genSQLUpdates($updUserLoginObj)
	{
		$sql = '';
		$this->lastSQLExecuteArray  = array();
		$itemAhead  = false;

		if ($this->idUserLogin != $updUserLoginObj->idUserLogin)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`idUserLogin` = :da1';
			$this->lastSQLExecuteArray[':da1'] = $updUserLoginObj->idUserLogin;
			$itemAhead = true;
		}
		if ($this->eLogin_Id != $updUserLoginObj->eLogin_Id)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eLogin_Id` = :da2';
			$this->lastSQLExecuteArray[':da2'] = $updUserLoginObj->eLogin_Id;
			$itemAhead = true;
		}
		if ($this->ePassword != $updUserLoginObj->ePassword)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`ePassword` = :da3';
			$this->lastSQLExecuteArray[':da3'] = $updUserLoginObj->ePassword;
			$itemAhead = true;
		}
		if ($this->eDisplay_Name != $updUserLoginObj->eDisplay_Name)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eDisplay_Name` = :da4';
			$this->lastSQLExecuteArray[':da4'] = $updUserLoginObj->eDisplay_Name;
			$itemAhead = true;
		}
		if ($this->Accepted_Terms != $updUserLoginObj->Accepted_Terms)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`Accepted_Terms` = :da5';
			$this->lastSQLExecuteArray[':da5'] = $updUserLoginObj->Accepted_Terms;
			$itemAhead = true;
		}
		$this->lastSQLUpdateString = $sql;
		return $sql;
	} // end function genSQLUpdates

	public function genChangeLogEntry($updUserLoginObj)
	{
		$changeLog  = 'user_login: ';
		 $itemAhead  = false;

		if ($this->idUserLogin != $updUserLoginObj->idUserLogin)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'idUserLogin: Was:['. $this->idUserLogin. '] New:[' . $updUserLoginObj->idUserLogin.']';
			$itemAhead = true;
		}
		if ($this->eLogin_Id != $updUserLoginObj->eLogin_Id)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eLogin_Id: Was:['. $this->eLogin_Id. '] New:[' . $updUserLoginObj->eLogin_Id.']';
			$itemAhead = true;
		}
		if ($this->ePassword != $updUserLoginObj->ePassword)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'ePassword: Was:['. $this->ePassword. '] New:[' . $updUserLoginObj->ePassword.']';
			$itemAhead = true;
		}
		if ($this->eDisplay_Name != $updUserLoginObj->eDisplay_Name)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eDisplay_Name: Was:['. $this->eDisplay_Name. '] New:[' . $updUserLoginObj->eDisplay_Name.']';
			$itemAhead = true;
		}
		if ($this->Accepted_Terms != $updUserLoginObj->Accepted_Terms)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'Accepted_Terms: Was:['. $this->Accepted_Terms. '] New:[' . $updUserLoginObj->Accepted_Terms.']';
			$itemAhead = true;
		}
		return $changeLog;
	} // end function genChangeLogEntry

	public function genSQLInsert()
	{
		$sql  = '';
		$values  = '';
		$this->lastSQLExecuteArray = array();

		$sql .= '`eLogin_Id`';
		$values .= ':da1';
		$this->lastSQLExecuteArray[':da1'] = $this->eLogin_Id;
		$sql .= ', '; $values .= ', ';
		$sql .= '`ePassword`';
		$values .= ':da2';
		$this->lastSQLExecuteArray[':da2'] = $this->ePassword;
		$sql .= ', '; $values .= ', ';
		$sql .= '`eDisplay_Name`';
		$values .= ':da3';
		$this->lastSQLExecuteArray[':da3'] = $this->eDisplay_Name;
		$sql .= ', '; $values .= ', ';
		$sql .= '`Accepted_Terms`';
		$values .= ':da4';
		$this->lastSQLExecuteArray[':da4'] = $this->Accepted_Terms;

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
			$sql  = 'SELECT * FROM `user_login` ';
			$sql .= 'WHERE (`idUserLogin` = :rID) LIMIT 1;';
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
			return ($this->idUserLogin);
		} // End try
		catch (PDOException $e)
		{
			error_log('readOne::user_login Database Error: ' . $e->getMessage() . PHP_EOL); 
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
			$sql = 'UPDATE `user_login` SET '.$setSql.' ';
			$sql.= 'WHERE (`idUserLogin` = ' . $this->idUserLogin . ');';
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute($this->lastSQLExecuteArray);
			$stmt->closeCursor();
			unset($stmt);
		} // End try
		catch (PDOException $e)
		{
			error_log("updateOne::user_login Database Error: " . $e->getMessage() . PHP_EOL); 
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
			$sql = "INSERT INTO `user_login` ( ". $setSql . " ) VALUES ( ". $this->lastSQLValuesString . ");";
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute($this->lastSQLExecuteArray);
			$lastId = $this->_dbW->lastInsertId();
			$stmt->closeCursor();
			unset($stmt);
			return($lastId);
		} // End try
		catch (PDOException $e)
		{
			error_log("addThisOne::user_login Database Error: " . $e->getMessage() . PHP_EOL); 
			return(0);
		} // End catch
	} // end function addOneuser_login

	public function delThisOne()
	{
		if ($this->_dbW == null)
		{
			return (false);
		}
		if ($this->idUserLogin == 0)
		{
			return(0);
		}

		try
		{  // Delete SQL
			$sql = "DELETE FROM `user_login` WHERE  ( `idUserLogin` = " . $this->idUserLogin. " ); ";
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute();
			$stmt->closeCursor();
			unset($stmt);
			return($this->idUserLogin);
		} // End try
		catch (PDOException $e)
		{
			error_log("delThisOne::user_login Database Error: " . $e->getMessage() . PHP_EOL);
			return(0);
		} // End catch
	} // end function delThisOne()

	public function encodeToArray() // returns array with shorter names 
	{
		$returnArray = array();
		$returnArray["idUsrLog"] = $this->idUserLogin;
		$returnArray["eLogId"] = $this->eLogin_Id;
		$returnArray["ePas"] = $this->ePassword;
		$returnArray["eDisNam"] = $this->eDisplay_Name;
		$returnArray["AccTer"] = $this->Accepted_Terms;
		return ($returnArray);
	} // end function encodeToArray()

	public function decodeFromArray(&$rxArray) // places values into local storage 
	{
		$this->idUserLogin = $rxArray["idUsrLog"];
		$this->eLogin_Id = $rxArray["eLogId"];
		$this->ePassword = $rxArray["ePas"];
		$this->eDisplay_Name = $rxArray["eDisNam"];
		$this->Accepted_Terms = $rxArray["AccTer"];
	} // end function decodeFromArray()


} // end class dataUserLoginClass
