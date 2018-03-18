<?php
/* Copyright 2018, Helping Out Us, All Rights Reserved */

if (!isset($lowerLevel))
{
	$lowerLevel = '';
}

/**
 * Requests Database Data Class
 * @abstract - Holds the data for the requests Table
 * @access public
*/

class dataRequestsClass
{
	// Table: requests
	public $idRequests;		// BIGINT UNSIGNED NOT-NULL AUTO_INCREMENT 
	public $idUserLogin;		// BIGINT UNSIGNED NOT-NULL 
	public $eTitle;		// VARCHAR(45) NOT-NULL 
	public $eDescription;		// VARCHAR(45) NOT-NULL 
	public $completed;		// TINYINT NOT-NULL DEFAULT-0 
	public $Giver;		// TINYINT NOT-NULL DEFAULT-0 
	public $Looker;		// TINYINT NOT-NULL DEFAULT-0 
	public $Date_Created;		// BIGINT NOT-NULL 
	public $Date_Completed;		// BIGINT NOT-NULL 

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

		$this->idRequests = 0;
		$this->idUserLogin = 0;
	}  // end function __construct

	public function setPDO($dbR, $dbW)
	{
		$this->_dbR = $dbR;
		$this->_dbW = $dbW;
	}  // end function setPDO

	public function saveValues($dbResult)
	{
		$this->idRequests = $dbResult['idRequests'];
		$this->idUserLogin = $dbResult['idUserLogin'];
		$this->eTitle = $dbResult['eTitle'];
		$this->eDescription = $dbResult['eDescription'];
		$this->completed = $dbResult['completed'];
		$this->Giver = $dbResult['Giver'];
		$this->Looker = $dbResult['Looker'];
		$this->Date_Created = $dbResult['Date_Created'];
		$this->Date_Completed = $dbResult['Date_Completed'];
	} // end function saveValues

	public function didDataChange($updRequestsObj)
	{
		if ($this->idRequests != $updRequestsObj->idRequests)
		{
			return (true);
		}
		if ($this->idUserLogin != $updRequestsObj->idUserLogin)
		{
			return (true);
		}
		if ($this->eTitle != $updRequestsObj->eTitle)
		{
			return (true);
		}
		if ($this->eDescription != $updRequestsObj->eDescription)
		{
			return (true);
		}
		if ($this->completed != $updRequestsObj->completed)
		{
			return (true);
		}
		if ($this->Giver != $updRequestsObj->Giver)
		{
			return (true);
		}
		if ($this->Looker != $updRequestsObj->Looker)
		{
			return (true);
		}
		if ($this->Date_Created != $updRequestsObj->Date_Created)
		{
			return (true);
		}
		if ($this->Date_Completed != $updRequestsObj->Date_Completed)
		{
			return (true);
		}
		return (false);
	} // end function didDataChange

	public function genSQLUpdates($updRequestsObj)
	{
		$sql = '';
		$this->lastSQLExecuteArray  = array();
		$itemAhead  = false;

		if ($this->idRequests != $updRequestsObj->idRequests)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`idRequests` = :da1';
			$this->lastSQLExecuteArray[':da1'] = $updRequestsObj->idRequests;
			$itemAhead = true;
		}
		if ($this->idUserLogin != $updRequestsObj->idUserLogin)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`idUserLogin` = :da2';
			$this->lastSQLExecuteArray[':da2'] = $updRequestsObj->idUserLogin;
			$itemAhead = true;
		}
		if ($this->eTitle != $updRequestsObj->eTitle)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eTitle` = :da3';
			$this->lastSQLExecuteArray[':da3'] = $updRequestsObj->eTitle;
			$itemAhead = true;
		}
		if ($this->eDescription != $updRequestsObj->eDescription)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`eDescription` = :da4';
			$this->lastSQLExecuteArray[':da4'] = $updRequestsObj->eDescription;
			$itemAhead = true;
		}
		if ($this->completed != $updRequestsObj->completed)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`completed` = :da5';
			$this->lastSQLExecuteArray[':da5'] = $updRequestsObj->completed;
			$itemAhead = true;
		}
		if ($this->Giver != $updRequestsObj->Giver)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`Giver` = :da6';
			$this->lastSQLExecuteArray[':da6'] = $updRequestsObj->Giver;
			$itemAhead = true;
		}
		if ($this->Looker != $updRequestsObj->Looker)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`Looker` = :da7';
			$this->lastSQLExecuteArray[':da7'] = $updRequestsObj->Looker;
			$itemAhead = true;
		}
		if ($this->Date_Created != $updRequestsObj->Date_Created)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`Date_Created` = :da8';
			$this->lastSQLExecuteArray[':da8'] = $updRequestsObj->Date_Created;
			$itemAhead = true;
		}
		if ($this->Date_Completed != $updRequestsObj->Date_Completed)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`Date_Completed` = :da9';
			$this->lastSQLExecuteArray[':da9'] = $updRequestsObj->Date_Completed;
			$itemAhead = true;
		}
		$this->lastSQLUpdateString = $sql;
		return $sql;
	} // end function genSQLUpdates

	public function genChangeLogEntry($updRequestsObj)
	{
		$changeLog  = 'requests: ';
		 $itemAhead  = false;

		if ($this->idRequests != $updRequestsObj->idRequests)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'idRequests: Was:['. $this->idRequests. '] New:[' . $updRequestsObj->idRequests.']';
			$itemAhead = true;
		}
		if ($this->idUserLogin != $updRequestsObj->idUserLogin)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'idUserLogin: Was:['. $this->idUserLogin. '] New:[' . $updRequestsObj->idUserLogin.']';
			$itemAhead = true;
		}
		if ($this->eTitle != $updRequestsObj->eTitle)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eTitle: Was:['. $this->eTitle. '] New:[' . $updRequestsObj->eTitle.']';
			$itemAhead = true;
		}
		if ($this->eDescription != $updRequestsObj->eDescription)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'eDescription: Was:['. $this->eDescription. '] New:[' . $updRequestsObj->eDescription.']';
			$itemAhead = true;
		}
		if ($this->completed != $updRequestsObj->completed)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'completed: Was:['. $this->completed. '] New:[' . $updRequestsObj->completed.']';
			$itemAhead = true;
		}
		if ($this->Giver != $updRequestsObj->Giver)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'Giver: Was:['. $this->Giver. '] New:[' . $updRequestsObj->Giver.']';
			$itemAhead = true;
		}
		if ($this->Looker != $updRequestsObj->Looker)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'Looker: Was:['. $this->Looker. '] New:[' . $updRequestsObj->Looker.']';
			$itemAhead = true;
		}
		if ($this->Date_Created != $updRequestsObj->Date_Created)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'Date_Created: Was:['. $this->Date_Created. '] New:[' . $updRequestsObj->Date_Created.']';
			$itemAhead = true;
		}
		if ($this->Date_Completed != $updRequestsObj->Date_Completed)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'Date_Completed: Was:['. $this->Date_Completed. '] New:[' . $updRequestsObj->Date_Completed.']';
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
		$sql .= '`eTitle`';
		$values .= ':da2';
		$this->lastSQLExecuteArray[':da2'] = $this->eTitle;
		$sql .= ', '; $values .= ', ';
		$sql .= '`eDescription`';
		$values .= ':da3';
		$this->lastSQLExecuteArray[':da3'] = $this->eDescription;
		$sql .= ', '; $values .= ', ';
		$sql .= '`completed`';
		$values .= ':da4';
		$this->lastSQLExecuteArray[':da4'] = $this->completed;
		$sql .= ', '; $values .= ', ';
		$sql .= '`Giver`';
		$values .= ':da5';
		$this->lastSQLExecuteArray[':da5'] = $this->Giver;
		$sql .= ', '; $values .= ', ';
		$sql .= '`Looker`';
		$values .= ':da6';
		$this->lastSQLExecuteArray[':da6'] = $this->Looker;
		$sql .= ', '; $values .= ', ';
		$sql .= '`Date_Created`';
		$values .= ':da7';
		$this->lastSQLExecuteArray[':da7'] = $this->Date_Created;
		$sql .= ', '; $values .= ', ';
		$sql .= '`Date_Completed`';
		$values .= ':da8';
		$this->lastSQLExecuteArray[':da8'] = $this->Date_Completed;

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
			$sql  = 'SELECT * FROM `requests` ';
			$sql .= 'WHERE (`idRequests` = :rID) LIMIT 1;';
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
			return ($this->idRequests);
		} // End try
		catch (PDOException $e)
		{
			error_log('readOne::requests Database Error: ' . $e->getMessage() . PHP_EOL); 
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
			$sql = 'UPDATE `requests` SET '.$setSql.' ';
			$sql.= 'WHERE (`idRequests` = ' . $this->idRequests . ');';
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute($this->lastSQLExecuteArray);
			$stmt->closeCursor();
			unset($stmt);
		} // End try
		catch (PDOException $e)
		{
			error_log("updateOne::requests Database Error: " . $e->getMessage() . PHP_EOL); 
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
			$sql = "INSERT INTO `requests` ( ". $setSql . " ) VALUES ( ". $this->lastSQLValuesString . ");";
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute($this->lastSQLExecuteArray);
			$lastId = $this->_dbW->lastInsertId();
			$stmt->closeCursor();
			unset($stmt);
			return($lastId);
		} // End try
		catch (PDOException $e)
		{
			error_log("addThisOne::requests Database Error: " . $e->getMessage() . PHP_EOL); 
			return(0);
		} // End catch
	} // end function addOnerequests

	public function delThisOne()
	{
		if ($this->_dbW == null)
		{
			return (false);
		}
		if ($this->idRequests == 0)
		{
			return(0);
		}

		try
		{  // Delete SQL
			$sql = "DELETE FROM `requests` WHERE  ( `idRequests` = " . $this->idRequests. " ); ";
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute();
			$stmt->closeCursor();
			unset($stmt);
			return($this->idRequests);
		} // End try
		catch (PDOException $e)
		{
			error_log("delThisOne::requests Database Error: " . $e->getMessage() . PHP_EOL);
			return(0);
		} // End catch
	} // end function delThisOne()

	public function encodeToArray() // returns array with shorter names 
	{
		$returnArray = array();
		$returnArray["idReq"] = $this->idRequests;
		$returnArray["idUsrLog"] = $this->idUserLogin;
		$returnArray["eTit"] = $this->eTitle;
		$returnArray["eDes"] = $this->eDescription;
		$returnArray["com"] = $this->completed;
		$returnArray["Giv"] = $this->Giver;
		$returnArray["Loo"] = $this->Looker;
		$returnArray["DatCre"] = $this->Date_Created;
		$returnArray["DatCom"] = $this->Date_Completed;
		return ($returnArray);
	} // end function encodeToArray()

	public function decodeFromArray(&$rxArray) // places values into local storage 
	{
		$this->idRequests = $rxArray["idReq"];
		$this->idUserLogin = $rxArray["idUsrLog"];
		$this->eTitle = $rxArray["eTit"];
		$this->eDescription = $rxArray["eDes"];
		$this->completed = $rxArray["com"];
		$this->Giver = $rxArray["Giv"];
		$this->Looker = $rxArray["Loo"];
		$this->Date_Created = $rxArray["DatCre"];
		$this->Date_Completed = $rxArray["DatCom"];
	} // end function decodeFromArray()


} // end class dataRequestsClass
