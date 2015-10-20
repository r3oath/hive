<?php

namespace App\Lib\Data;

use R\Hive\Contracts\Data\MutatorInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use League\Csv\Reader;

class EntryFileMutator implements MutatorInterface
{
    /**
     * The key/value data store.
     *
     * @var array
     */
    protected $store;

    /**
     * Create a new data mutator from the given array.
     *
     * @param array $data The raw data.
     */
    public function __construct(UploadedFile $file)
    {
        $csv = Reader::createFromPath($file->getRealPath());

        // Grab the headers.
        $headers = $csv->fetchOne(0);

        // Grab the data.
        $data = $csv->fetchOne(1);
        $this->store['name'] = isset($data[0]) ? $data[0] : null;
        $this->store['content'] = isset($data[1]) ? $data[1] : null;
    }

    /**
     * Get the associated value for the specified key.
     *
     * @param string $key The key.
     *
     * @return mixed The value.
     */
    public function get($key)
    {
        return $this->store[$key];
    }

    /**
     * Return all key/value pairs in an associative array.
     *
     * @return array The key/value store.
     */
    public function all()
    {
        return $this->store;
    }

    /**
     * Return the values for the specified set of keys.
     *
     * @param array $keys The key to find values for.
     *
     * @return array The key/value pairs that match the given keys.
     */
    public function values($keys = [])
    {
        return array_intersect_key($this->store, array_flip($keys));
    }

    /**
     * Check if the given key exists in the store.
     *
     * @param string  $key The key to look for.
     *
     * @return boolean True if the key exists.
     */
    public function has($key)
    {
        return
            isset($this->store[$key])
            || array_key_exists($key, $this->store);
    }

    /**
     * Set the given key to the specified value.
     *
     * @param string $key   The key.
     * @param mixed  $value The value.
     */
    public function set($key, $value)
    {
        $this->store[$key] = $value;
    }
}
