<?php

namespace Publica\Relaquent\Relations;

use Illuminate\Database\Eloquent\Relations\HasOne as IlluminateHasOne;
use Publica\Relaquent\Relations\Concerns\HasOneOrManyTrait;
use Publica\Relaquent\Relations\Contracts\JoinsRelationsContract;

class HasOne extends IlluminateHasOne implements JoinsRelationsContract
{
    use HasOneOrManyTrait;
}
