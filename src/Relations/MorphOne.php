<?php

namespace Publica\Relaquent\Relations;

use Illuminate\Database\Eloquent\Relations\MorphOne as IlluminateMorphOne;
use Publica\Relaquent\Relations\Concerns\HasOneOrManyTrait;
use Publica\Relaquent\Relations\Contracts\JoinsRelationsContract;

class MorphOne extends IlluminateMorphOne implements JoinsRelationsContract
{
    use HasOneOrManyTrait;
}
