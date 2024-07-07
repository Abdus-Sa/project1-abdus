<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $config = config('MySite');
        echo "Selamat Datang di {$config->siteName}. Kirim kritik dan saran
        ke email{$config->siteEmail}";
    }
}
