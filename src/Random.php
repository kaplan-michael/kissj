<?php

namespace kissj;

class Random {
	public function generateToken(): string {
		return md5(random_int(PHP_INT_MIN, PHP_INT_MAX));
	}
}