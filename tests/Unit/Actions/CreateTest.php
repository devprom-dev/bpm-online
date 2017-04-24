<?php
namespace agoalofalife\Tests\Actions;


use agoalofalife\bpm\Actions\Create;
use agoalofalife\Tests\TestCase;

class CreateTest extends TestCase
{
    protected $creator;
    
    public function setUp()
    {
        parent::setUp();
        $this->creator = new Create();
    }

    public function test_setData()
    {
        $this->creator->setData([]);
    }

    public function test_getUrl()
    {
        $this->assertEquals('/', $this->creator->getUrl());
    }
}