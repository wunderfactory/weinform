<?php

namespace Wundership\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ScopeInterface;

class PublishedScope implements ScopeInterface {

	/**
	 * All of the extensions to be added to the builder.
	 *
	 * @var array
	 */
	protected $extensions = ['WithUnpublished'];

	/**
	 * Apply the scope to a given Eloquent query builder.
	 *
	 * @param  \Illuminate\Database\Eloquent\Builder $builder
	 * @param  \Illuminate\Database\Eloquent\Model $model
	 * @return void
	 */
	public function apply(Builder $builder, Model $model)
	{
		$builder->whereNotNull('published_at');

		$this->extend($builder);
	}

	/**
	 * Remove the scope from the given Eloquent query builder.
	 *
	 * @param  \Illuminate\Database\Eloquent\Builder $builder
	 * @param  \Illuminate\Database\Eloquent\Model $model
	 *
	 * @return void
	 */
	public function remove(Builder $builder, Model $model)
	{
		$column = 'published_at';

		$query = $builder->getQuery();

		foreach ((array) $query->wheres as $key => $where)
		{
			// If the where clause is a soft delete date constraint, we will remove it from
			// the query and reset the keys on the wheres. This allows this developer to
			// include deleted model in a relationship result set that is lazy loaded.
			if ($this->isPublishesConstraint($where, $column))
			{
				unset($query->wheres[$key]);

				$query->wheres = array_values($query->wheres);
			}
		}
	}

	/**
	 * Extend the query builder with the needed functions.
	 *
	 * @param  \Illuminate\Database\Eloquent\Builder  $builder
	 * @return void
	 */
	public function extend(Builder $builder)
	{
		foreach ($this->extensions as $extension)
		{
			$this->{"add{$extension}"}($builder);
		}
	}

	/**
	 * Add the with-trashed extension to the builder.
	 *
	 * @param  \Illuminate\Database\Eloquent\Builder  $builder
	 * @return void
	 */
	protected function addWithUnpublished(Builder $builder)
	{
		$builder->macro('withUnpublished', function(Builder $builder)
		{
			$this->remove($builder, $builder->getModel());

			return $builder;
		});
	}

	/**
	 * Determine if the given where clause is a published constraint.
	 *
	 * @param  array   $where
	 * @param  string  $column
	 * @return bool
	 */
	protected function isPublishesConstraint(array $where, $column)
	{
		return $where['type'] == 'NotNull' && $where['column'] == $column;
	}
}