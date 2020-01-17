<?php

class TestCase extends Orchestra\Testbench\TestCase
{
    /**
     * @return \Zhaoweizhong\Laravel5Fractal\FractalServices
     */
    protected function getService()
    {
        return new \Zhaoweizhong\Laravel5Fractal\FractalServices(new \League\Fractal\Manager(), $this->app);
    }

    /**
     * @return array
     */
    protected function getTestUserData()
    {
        return [
            [
                'id'    => 1,
                'name'  => 'Foo',
                'email' => 'foo@gmail.com',
            ],
            [
                'id'    => 2,
                'name'  => 'Bar',
                'email' => 'var@gmail.com',
            ],
        ];
    }
}
