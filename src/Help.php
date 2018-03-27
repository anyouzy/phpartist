<?php

namespace anyouzy\phpartist;

class Help {

	public function dd(string $str='')
	{
		echo '<pre>', $str, '</pre>';
		exit(0);
	}
}