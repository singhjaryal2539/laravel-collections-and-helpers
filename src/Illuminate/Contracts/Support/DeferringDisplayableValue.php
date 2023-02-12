<?php

namespace SinghJaryal\Illuminate\Contracts\Support;

interface DeferringDisplayableValue
{
    /**
     * Resolve the displayable value that the class is deferring.
     *
     * @return \SinghJaryal\Illuminate\Contracts\Support\Htmlable|string
     */
    public function resolveDisplayableValue();
}
