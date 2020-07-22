<?php

namespace Publica\Relaquent\Relations;

use Publica\Relaquent\Relations\Concerns\OneThroughTrait;

class HasOneThrough extends BelongsToMany
{
    use OneThroughTrait;
}
