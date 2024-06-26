<?php

function searchForError($type, &$count)

{

    switch($type)

    {

        case E_ERROR: // 1 //
            $count++;
            return 'E_ERROR';

        case E_WARNING: // 2 //
            $count++;
            return 'E_WARNING';

        case E_PARSE: // 4 //
            $count++;
            return 'E_PARSE';

        case E_NOTICE: // 8 //
            $count++;
            return 'E_NOTICE';

        case E_CORE_ERROR: // 16 //
            $count++;
            return 'E_CORE_ERROR';

        case E_CORE_WARNING: // 32 //
            $count++;
            return 'E_CORE_WARNING';

        case E_COMPILE_ERROR: // 64 //
            $count++;
            return 'E_COMPILE_ERROR';

        case E_COMPILE_WARNING: // 128 //
            $count++;
            return 'E_COMPILE_WARNING';

        case E_USER_ERROR: // 256 //
            $count++;
            return 'E_USER_ERROR';

        case E_USER_WARNING: // 512 //
            $count++;
            return 'E_USER_WARNING';

        case E_USER_NOTICE: // 1024 //
            $count++;
            return 'E_USER_NOTICE';

        case E_STRICT: // 2048 //
            $count++;
            return 'E_STRICT';

        case E_RECOVERABLE_ERROR: // 4096 //
            $count++;
            return 'E_RECOVERABLE_ERROR';

        case E_DEPRECATED: // 8192 //
            $count++;
            return 'E_DEPRECATED';

        case E_USER_DEPRECATED: // 16384 //
            $count++;
            return 'E_USER_DEPRECATED';

    }

    return "";
}

error_reporting(~E_ERROR);
$errorLevel = error_reporting();
$count = 0;

for ($i = 0; $i < 15; $i++) {
    print(searchForError($errorLevel & pow(2, $i), $count) . "<br>\n");
}
print($count);
