<?php
namespace Jenkins;
class Jenkins {
	public function test1($integer) {
		return is_integer($integer);
	}

	public function test2($string) {
		return is_string($string);
	}
}
