<?php

use CodeIgniter\CLI\CLI;

// The main Exception
<<<<<<< HEAD
CLI::write('[' . $exception::class . ']', 'light_gray', 'red');
=======
CLI::write('[' . get_class($exception) . ']', 'light_gray', 'red');
>>>>>>> e130526 (pertemuan 9)
CLI::write($message);
CLI::write('at ' . CLI::color(clean_path($exception->getFile()) . ':' . $exception->getLine(), 'green'));
CLI::newLine();

$last = $exception;

while ($prevException = $last->getPrevious()) {
    $last = $prevException;

    CLI::write('  Caused by:');
<<<<<<< HEAD
    CLI::write('  [' . $prevException::class . ']', 'red');
=======
    CLI::write('  [' . get_class($prevException) . ']', 'red');
>>>>>>> e130526 (pertemuan 9)
    CLI::write('  ' . $prevException->getMessage());
    CLI::write('  at ' . CLI::color(clean_path($prevException->getFile()) . ':' . $prevException->getLine(), 'green'));
    CLI::newLine();
}

// The backtrace
if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE) {
    $backtraces = $last->getTrace();

    if ($backtraces) {
        CLI::write('Backtrace:', 'green');
    }

    foreach ($backtraces as $i => $error) {
        $padFile  = '    '; // 4 spaces
        $padClass = '       '; // 7 spaces
        $c        = str_pad($i + 1, 3, ' ', STR_PAD_LEFT);

        if (isset($error['file'])) {
            $filepath = clean_path($error['file']) . ':' . $error['line'];

            CLI::write($c . $padFile . CLI::color($filepath, 'yellow'));
        } else {
            CLI::write($c . $padFile . CLI::color('[internal function]', 'yellow'));
        }

        $function = '';

        if (isset($error['class'])) {
            $type = ($error['type'] === '->') ? '()' . $error['type'] : $error['type'];
            $function .= $padClass . $error['class'] . $type . $error['function'];
        } elseif (! isset($error['class']) && isset($error['function'])) {
            $function .= $padClass . $error['function'];
        }

<<<<<<< HEAD
        $args = implode(', ', array_map(static fn ($value): string => match (true) {
            is_object($value) => 'Object(' . $value::class . ')',
            is_array($value)  => $value !== [] ? '[...]' : '[]',
            $value === null   => 'null', // return the lowercased version
            default           => var_export($value, true),
=======
        $args = implode(', ', array_map(static function ($value) {
            switch (true) {
                case is_object($value):
                    return 'Object(' . get_class($value) . ')';

                case is_array($value):
                    return count($value) ? '[...]' : '[]';

                case $value === null:
                    return 'null'; // return the lowercased version

                default:
                    return var_export($value, true);
            }
>>>>>>> e130526 (pertemuan 9)
        }, array_values($error['args'] ?? [])));

        $function .= '(' . $args . ')';

        CLI::write($function);
        CLI::newLine();
    }
}
