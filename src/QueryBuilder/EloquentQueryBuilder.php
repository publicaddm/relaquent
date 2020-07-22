<?php

namespace Publica\Relaquent\QueryBuilder;

use Illuminate\Database\Eloquent\Builder as IlluminateEloquentQueryBuilder;
use Publica\Relaquent\QueryBuilder\Concerns\EagerLoadsPivotRelation;

class EloquentQueryBuilder extends IlluminateEloquentQueryBuilder
{
    use EagerLoadsPivotRelation;
}
