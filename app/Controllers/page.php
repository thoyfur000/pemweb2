<?php

namespace App\Controllers;

class page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "halaman term of service";
    }
    public function biodata()
    {
        echo "nama : ali thoyfur";
        echo "<br>Alamat : jogoroto jombang<br>";
        echo "ttl : jombang, 22 september 2005";
        echo "<br>jenis kelamin : laki-laki<br>";
        echo "no hp : 083844452065";
    }
}
