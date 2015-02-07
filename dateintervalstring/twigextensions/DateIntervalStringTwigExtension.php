<?php

namespace Craft;

class DateIntervalStringTwigExtension extends \Twig_Extension
{
	protected $env;

	public function getName()
	{
		return 'Date Interval String';
	}

	public function getFilters()
	{
		return array('dateIntervalString' => new \Twig_Filter_Method($this, 'dateIntervalString'));
	}

	public function initRuntime(\Twig_Environment $env)
	{
		$this->env = $env;
	}

	public function dateIntervalString($str)
	{
		$interval = DateInterval::createFromDateString($str);

		// Reading all non-zero date parts.
		$date = array_filter(array(
			'Y' => $interval->y,
			'M' => $interval->m,
			'D' => $interval->d
		));

		// Reading all non-zero time parts.
		$time = array_filter(array(
			'H' => $interval->h,
			'M' => $interval->i,
			'S' => $interval->s
		));

		$specString = 'P';

		// Adding each part to the spec-string.
		foreach ($date as $key => $value) {
			$specString .= $value . $key;
		}
		if (count($time) > 0) {
			$specString .= 'T';
			foreach ($time as $key => $value) {
				$specString .= $value . $key;
			}
		}

		return $specString;
	}
	
}