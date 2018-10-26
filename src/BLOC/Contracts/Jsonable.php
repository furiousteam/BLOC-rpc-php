<?php

namespace BLOC\Contracts;

interface Jsonable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @return string
     */
    public function toJson();
}