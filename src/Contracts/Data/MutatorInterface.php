<?php

namespace R\Hive\Contracts\Data;

interface MutatorInterface
{
    /**
     * Get the value for the given key.
     *
     * @param string $key The key.
     *
     * @return mixed The value.
     */
    public function get($key);

    /**
     * Return all of the mutators stored values.
     *
     * @return mixed
     */
    public function all();

    /**
     * Check if this mutator has the given key->value pair.
     *
     * @param string $key The key to check for.
     *
     * @return bool True if the key->value pair exists.
     */
    public function has($key);

    /**
     * Set the given key->value pair on this mutator.
     *
     * @param string $key   The key.
     * @param mixed  $value The associated value.
     */
    public function set($key, $value);
}
