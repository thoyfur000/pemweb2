<?php

use CodeIgniter\Test\CIUnitTestCase;
<<<<<<< HEAD
=======
use Config\Services;
>>>>>>> e130526 (pertemuan 9)

/**
 * @internal
 */
final class ExampleSessionTest extends CIUnitTestCase
{
    public function testSessionSimple(): void
    {
<<<<<<< HEAD
        $session = service('session');
=======
        $session = Services::session();
>>>>>>> e130526 (pertemuan 9)

        $session->set('logged_in', 123);
        $this->assertSame(123, $session->get('logged_in'));
    }
}
