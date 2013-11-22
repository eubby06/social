<?php namespace Eubby\Social\Services\Provider;

interface ProviderInterface
{
	public function __call($class, $arguments);

	public function resolveModel($class);
}