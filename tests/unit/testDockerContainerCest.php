<?php


class testDockerContainerCest
{
    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I)
    {
    }

    // tests
    public function testApacheService(UnitTester $I)
    {
		
		$I->am('Docker Tester');
		$I->wantTo('verify apache in the container');
		$I->runShellCommand('docker exec '.getenv("container_name").' service apache2 status');
		$I->seeInShellOutput('apache2 is running');
    }
     public function testMySQLService(UnitTester $I)
    {
		
		$I->am('Docker Tester');
		$I->wantTo('verify apache in the container');
		$I->runShellCommand('docker exec '.getenv("container_name").' mysqladmin -uroot -p'.getenv("MYSQL_ROOT_PASSWORD").' status');
		$I->seeInShellOutput('Uptime');
    }
}
