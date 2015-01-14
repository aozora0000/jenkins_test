<?php
class RedisTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        try {
            $this->redis = new Redis;
            var_dump($_ENV['REDIS_PORT_6379_TCP_ADDR'],$_ENV['REDIS_PORT_6379_TCP_PORT']);
            $host = (isset($_ENV['REDIS_PORT_6379_TCP_ADDR'])) ? $_ENV['REDIS_PORT_6379_TCP_ADDR'] : "127.0.0.1";
            $port = (isset($_ENV['REDIS_PORT_6379_TCP_PORT'])) ? $_ENV['REDIS_PORT_6379_TCP_PORT'] : "6379";
            $this->redis->connect($host,$port);
        } catch (RedisException $e) {
            $this->fail("Redisに接続出来ませんでした。");
        }
    }

    public function testGetTime() {
        $time = $this->redis->time();
        $this->assertContainsOnly("string",$time);
    }
}
