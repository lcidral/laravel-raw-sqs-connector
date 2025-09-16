<?php

namespace Tests\Support;

use lcidral\LaravelRawSqsConnector\RawSqsJob;

class TestJobClass extends RawSqsJob
{
    public $data = [];
}
