<?php
/* Copyright 2018, Helping Out Us, All Rights Reserved */

if (!isset($lowerLevel))
{
	$lowerLevel = '';
}

/**
 * Availability Database Data Class
 * @abstract - Holds the data for the Availability Table
 * @access public
*/

class dataAvailabilityClass
{
	// Table: Availability
	public $idAvailability;		// BIGINT UNSIGNED NOT-NULL AUTO_INCREMENT 
	public $idUserLogin;		// BIGINT NOT-NULL 
	public $idRequest;		// BIGINT NOT-NULL 
	public $StartTime;		// BIGINT NULL 
	public $EndTime;		// BIGINT NULL 

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

		$this->idAvailability = 0;
		$this->idUserLogin = 0;
		$this->idRequest = 0;
	}  // end function __construct

	public function setPDO($dbR, $dbW)
	{
		$this->_dbR = $dbR;
		$this->_dbW = $dbW;
	}  // end function setPDO

	public function saveValues($dbResult)
	{
		$this->idAvailability = $dbResult['idAvailability'];
		$this->idUserLogin = $dbResult['idUserLogin'];
		$this->idRequest = $dbResult['idRequest'];
		$this->StartTime = $dbResult['StartTime'];
		$this->EndTime = $dbResult['EndTime'];
	} // end function saveValues

	public function didDataChange($updAvailabilityObj)
	{
		if ($this->idAvailability != $updAvailabilityObj->idAvailability)
		{
			return (true);
		}
		if ($this->idUserLogin != $updAvailabilityObj->idUserLogin)
		{
			return (true);
		}
		if ($this->idRequest != $updAvailabilityObj->idRequest)
		{
			return (true);
		}
		if ($this->StartTime != $updAvailabilityObj->StartTime)
		{
			return (true);
		}
		if ($this->EndTime != $updAvailabilityObj->EndTime)
		{
			return (true);
		}
		return (false);
	} // end function didDataChange

	public function genSQLUpdates($updAvailabilityObj)
	{
		$sql = '';
		$this->lastSQLExecuteArray  = array();
		$itemAhead  = false;

		if ($this->idAvailability != $updAvailabilityObj->idAvailability)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`idAvailability` = :da1';
			$this->lastSQLExecuteArray[':da1'] = $updAvailabilityObj->idAvailability;
			$itemAhead = true;
		}
		if ($this->idUserLogin != $updAvailabilityObj->idUserLogin)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`idUserLogin` = :da2';
			$this->lastSQLExecuteArray[':da2'] = $updAvailabilityObj->idUserLogin;
			$itemAhead = true;
		}
		if ($this->idRequest != $updAvailabilityObj->idRequest)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`idRequest` = :da3';
			$this->lastSQLExecuteArray[':da3'] = $updAvailabilityObj->idRequest;
			$itemAhead = true;
		}
		if ($this->StartTime != $updAvailabilityObj->StartTime)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`StartTime` = :da4';
			$this->lastSQLExecuteArray[':da4'] = $updAvailabilityObj->StartTime;
			$itemAhead = true;
		}
		if ($this->EndTime != $updAvailabilityObj->EndTime)
		{
			if ($itemAhead)
			{
				$sql .= ', ';
			}
			$sql .= '`EndTime` = :da5';
			$this->lastSQLExecuteArray[':da5'] = $updAvailabilityObj->EndTime;
			$itemAhead = true;
		}
		$this->lastSQLUpdateString = $sql;
		return $sql;
	} // end function genSQLUpdates

	public function genChangeLogEntry($updAvailabilityObj)
	{
		$changeLog  = 'Availability: ';
		 $itemAhead  = false;

		if ($this->idAvailability != $updAvailabilityObj->idAvailability)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'idAvailability: Was:['. $this->idAvailability. '] New:[' . $updAvailabilityObj->idAvailability.']';
			$itemAhead = true;
		}
		if ($this->idUserLogin != $updAvailabilityObj->idUserLogin)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'idUserLogin: Was:['. $this->idUserLogin. '] New:[' . $updAvailabilityObj->idUserLogin.']';
			$itemAhead = true;
		}
		if ($this->idRequest != $updAvailabilityObj->idRequest)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'idRequest: Was:['. $this->idRequest. '] New:[' . $updAvailabilityObj->idRequest.']';
			$itemAhead = true;
		}
		if ($this->StartTime != $updAvailabilityObj->StartTime)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'StartTime: Was:['. $this->StartTime. '] New:[' . $updAvailabilityObj->StartTime.']';
			$itemAhead = true;
		}
		if ($this->EndTime != $updAvailabilityObj->EndTime)
		{
			if ($itemAhead)
			{
				$changeLog .= ', ';
			}
			$changeLog .= 'EndTime: Was:['. $this->EndTime. '] New:[' . $updAvailabilityObj->EndTime.']';
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
		$sql .= '`idRequest`';
		$values .= ':da2';
		$this->lastSQLExecuteArray[':da2'] = $this->idRequest;
		$sql .= ', '; $values .= ', ';
		$sql .= '`StartTime`';
		$values .= ':da3';
		$this->lastSQLExecuteArray[':da3'] = $this->StartTime;
		$sql .= ', '; $values .= ', ';
		$sql .= '`EndTime`';
		$values .= ':da4';
		$this->lastSQLExecuteArray[':da4'] = $this->EndTime;

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
			$sql  = 'SELECT * FROM `Availability` ';
			$sql .= 'WHERE (`idAvailability` = :rID) LIMIT 1;';
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
			return ($this->idAvailability);
		} // End try
		catch (PDOException $e)
		{
			error_log('readOne::Availability Database Error: ' . $e->getMessage() . PHP_EOL); 
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
			$sql = 'UPDATE `Availability` SET '.$setSql.' ';
			$sql.= 'WHERE (`idAvailability` = ' . $this->idAvailability . ');';
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute($this->lastSQLExecuteArray);
			$stmt->closeCursor();
			unset($stmt);
		} // End try
		catch (PDOException $e)
		{
			error_log("updateOne::Availability Database Error: " . $e->getMessage() . PHP_EOL); 
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
			$sql = "INSERT INTO `Availability` ( ". $setSql . " ) VALUES ( ". $this->lastSQLValuesString . ");";
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute($this->lastSQLExecuteArray);
			$lastId = $this->_dbW->lastInsertId();
			$stmt->closeCursor();
			unset($stmt);
			return($lastId);
		} // End try
		catch (PDOException $e)
		{
			error_log("addThisOne::Availability Database Error: " . $e->getMessage() . PHP_EOL); 
			return(0);
		} // End catch
	} // end function addOneAvailability

	public function delThisOne()
	{
		if ($this->_dbW == null)
		{
			return (false);
		}
		if ($this->idAvailability == 0)
		{
			return(0);
		}

		try
		{  // Delete SQL
			$sql = "DELETE FROM `Availability` WHERE  ( `idAvailability` = " . $this->idAvailability. " ); ";
			$stmt = $this->_dbW->prepare($sql);
			$stmt->execute();
			$stmt->closeCursor();
			unset($stmt);
			return($this->idAvailability);
		} // End try
		catch (PDOException $e)
		{
			error_log("delThisOne::Availability Database Error: " . $e->getMessage() . PHP_EOL);
			return(0);
		} // End catch
	} // end function delThisOne()

	public function encodeToArray() // returns array with shorter names 
	{
		$returnArray = array();
		$returnArray["idAva"] = $this->idAvailability;
		$returnArray["idUsrLog"] = $this->idUserLogin;
		$returnArray["idReq"] = $this->idRequest;
		$returnArray["StaTim"] = $this->StartTime;
		$returnArray["EndTim"] = $this->EndTime;
		return ($returnArray);
	} // end function encodeToArray()

	public function decodeFromArray(&$rxArray) // places values into local storage 
	{
		$this->idAvailability = $rxArray["idAva"];
		$this->idUserLogin = $rxArray["idUsrLog"];
		$this->idRequest = $rxArray["idReq"];
		$this->StartTime = $rxArray["StaTim"];
		$this->EndTime = $rxArray["EndTim"];
	} // end function decodeFromArray()


} // end class dataAvailabilityClass
