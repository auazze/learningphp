<?php

return 2;

echo 3; # а вот это уже не будет выведено, потому что всё, что после return - игнорируется
# PhpStorm пишет Unreachable statement
# это относится, вроде как, только к файлам, которые включены (include)