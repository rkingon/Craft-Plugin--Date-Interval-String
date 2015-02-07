<?php

namespace Craft;

class DateIntervalStringPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Date Interval String');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Roi Kingon';
	}

	public function getDeveloperUrl()
	{
		return 'http://www.roikingon.com';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.dateintervalstring.twigextensions.DateIntervalStringTwigExtension');
		return new DateIntervalStringTwigExtension();
	}
}
