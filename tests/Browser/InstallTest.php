<?php

namespace Tests\Browser;

use Dcat\Admin\Admin;
use Tests\TestCase;

/**
 * @group install
 */
class InstallTest extends TestCase
{
    protected $login = false;

    public function testInstalledDirectories()
    {
        $this->assertFileExists(admin_path());
        $this->assertFileExists(admin_path('Controllers'));
        $this->assertFileExists(admin_path('routes.php'));
        $this->assertFileExists(admin_path('bootstrap.php'));
        $this->assertFileExists(admin_path('Controllers/HomeController.php'));
        $this->assertFileExists(admin_path('Controllers/AuthController.php'));
        $this->assertFileExists(admin_path('Metrics/Examples'));
        $this->assertFileExists(admin_path('Metrics/Examples/NewDevices.php'));
        $this->assertFileExists(admin_path('Metrics/Examples/NewUsers.php'));
        $this->assertFileExists(admin_path('Metrics/Examples/ProductOrders.php'));
        $this->assertFileExists(admin_path('Metrics/Examples/Sessions.php'));
        $this->assertFileExists(admin_path('Metrics/Examples/Tickets.php'));
        $this->assertFileExists(config_path('admin.php'));
        $this->assertFileExists(public_path(Admin::asset()->getRealPath('@admin')));
        $this->assertFileExists(database_path('migrations/2016_01_04_173148_create_admin_tables.php'));
        $this->assertFileExists(resource_path('lang/en/admin.php'));
        $this->assertFileExists(resource_path('lang/zh-CN/admin.php'));
        $this->assertFileExists(resource_path('lang/zh-CN/global.php'));
    }
}
