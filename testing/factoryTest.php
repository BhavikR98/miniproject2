<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 2019-04-25
 * Time: 12:01
 */

declare(strict_types=1);

use testing;

final class factoryTest extends testing
{
    public function testFactoryFileExists() {
        $this->assertFileExists('/G:/Spring 2019/project2/src old/recordFactory.php');
    }
    public function testFailure() {
        $this->assertFileIsReadable('/G:/Spring 2019/project2/src old/recordFactory.php');
    }
    public function testFileObject() {
        $this->assertInstanceOf(recordFactory)::create(), new recordFactory());
    }
}