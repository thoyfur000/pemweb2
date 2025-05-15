<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

/*
 *---------------------------------------------------------------
 * Sample file for Preloading
 *---------------------------------------------------------------
 * See https://www.php.net/manual/en/opcache.preloading.php
 *
 * How to Use:
 *   0. Copy this file to your project root folder.
 *   1. Set the $paths property of the preload class below.
 *   2. Set opcache.preload in php.ini.
 *     php.ini:
 *     opcache.preload=/path/to/preload.php
 */

// Load the paths config file
require __DIR__ . '/app/Config/Paths.php';

// Path to the front controller
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);

<<<<<<< HEAD
=======
/**
 * See https://www.php.net/manual/en/function.str-contains.php#126277
 */
if (! function_exists('str_contains')) {
    /**
     * Polyfill of str_contains()
     */
    function str_contains(string $haystack, string $needle): bool
    {
        return empty($needle) || strpos($haystack, $needle) !== false;
    }
}

>>>>>>> e130526 (pertemuan 9)
class preload
{
    /**
     * @var array Paths to preload.
     */
    private array $paths = [
        [
<<<<<<< HEAD
            'include' => __DIR__ . '/vendor/codeigniter4/framework/system', // Change this path if using manual installation
=======
            'include' => __DIR__ . '/vendor/codeigniter4/framework/system',
>>>>>>> e130526 (pertemuan 9)
            'exclude' => [
                // Not needed if you don't use them.
                '/system/Database/OCI8/',
                '/system/Database/Postgre/',
<<<<<<< HEAD
                '/system/Database/SQLite3/',
                '/system/Database/SQLSRV/',
                // Not needed for web apps.
                '/system/Database/Seeder.php',
                '/system/Test/',
=======
                '/system/Database/SQLSRV/',
                // Not needed.
                '/system/Database/Seeder.php',
                '/system/Test/',
                '/system/Language/',
>>>>>>> e130526 (pertemuan 9)
                '/system/CLI/',
                '/system/Commands/',
                '/system/Publisher/',
                '/system/ComposerScripts.php',
<<<<<<< HEAD
                // Not Class/Function files.
                '/system/Config/Routes.php',
                '/system/Language/',
                '/system/bootstrap.php',
                '/system/rewrite.php',
                '/Views/',
                // Errors occur.
=======
                '/Views/',
                // Errors occur.
                '/system/Config/Routes.php',
>>>>>>> e130526 (pertemuan 9)
                '/system/ThirdParty/',
            ],
        ],
    ];

    public function __construct()
    {
        $this->loadAutoloader();
    }

<<<<<<< HEAD
    private function loadAutoloader(): void
    {
        $paths = new Config\Paths();
        require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'Boot.php';

        CodeIgniter\Boot::preload($paths);
=======
    private function loadAutoloader()
    {
        $paths = new Config\Paths();
        require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';
>>>>>>> e130526 (pertemuan 9)
    }

    /**
     * Load PHP files.
     */
<<<<<<< HEAD
    public function load(): void
=======
    public function load()
>>>>>>> e130526 (pertemuan 9)
    {
        foreach ($this->paths as $path) {
            $directory = new RecursiveDirectoryIterator($path['include']);
            $fullTree  = new RecursiveIteratorIterator($directory);
            $phpFiles  = new RegexIterator(
                $fullTree,
                '/.+((?<!Test)+\.php$)/i',
<<<<<<< HEAD
                RecursiveRegexIterator::GET_MATCH,
=======
                RecursiveRegexIterator::GET_MATCH
>>>>>>> e130526 (pertemuan 9)
            );

            foreach ($phpFiles as $key => $file) {
                foreach ($path['exclude'] as $exclude) {
                    if (str_contains($file[0], $exclude)) {
                        continue 2;
                    }
                }

                require_once $file[0];
                echo 'Loaded: ' . $file[0] . "\n";
            }
        }
    }
}

(new preload())->load();
