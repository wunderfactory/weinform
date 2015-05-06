<?php


namespace Wundership\Traits;


use Wundership\Scopes\PublishedScope;

trait Publishes {

	public static function bootPublishes()
	{
		static::addGlobalScope(new PublishedScope);
	}
}