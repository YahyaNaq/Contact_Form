<?php

class connection {
	public static function create($DBCredentials) {
		try {
		return new PDO(
			$DBCredentials['connection'].';dbname='.$DBCredentials['name'], 
			$DBCredentials['username'],
			$DBCredentials['password'],
			$DBCredentials['options']);
		} catch (PDOException $e) {
			die("Sorry, couldn't connect! Please try again.");
		}
	}
}