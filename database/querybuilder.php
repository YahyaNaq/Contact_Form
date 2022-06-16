<?php

class querybuilder {
	protected $pdo;

	public function __construct(PDO $pdo) {
		$this->pdo=$pdo;
	}

	public function SelectAll($table) {
		$statement=$this->pdo->prepare("select * from {$table};");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
	public function AntiDupli($table,$record) {
		$prev_recs=$this->SelectAll($table);
		for ($i=0;$i<count($prev_recs);$i++) {
			$rec=$prev_recs[$i];
			if ($rec->{"fname"}==$record['fname']
				and $rec->{"lname"}==$record['lname']
				and $rec->{"email"}==$record['email']
				and $rec->{"issue"}==$record['issue']
				and $rec->{"comment"}==$record['comment']
			) {
				return false;
			}
		}
		return true;
	}

	public function InsertRecord($table,$record) {
		if ($this->AntiDupli($table,$record)) {
			$statement=$this->pdo->prepare(
				"insert into $table (fname,lname,email,issue,comment)
				values (?,?,?,?,?);"
			);
			$statement->execute(
				array(
				$record['fname'],
				$record['lname'],
				$record['email'],
				$record['issue'],
				$record['comment']));
		}
	}
}