<?php namespace PaulH\DummyScript\Whatever;

use Illuminate\Support\ServiceProvider;

// This is a comment

class CoreServiceProvider extends ServiceProvider {

    protected $test;

    public function __construct()
    {
        echo "hello world";
        $this->test = true;
    }

    /**
     * Get the value of Test
     *
     * @return mixed
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set the value of Test
     *
     * @param mixed test
     *
     * @return self
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

}
