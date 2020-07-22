<?php

namespace Publica\Relaquent\Relations;

use Publica\Relaquent\Relations\Concerns\OneThroughTrait;

class MorphOneThrough extends MorphToMany
{
    use OneThroughTrait;
}
