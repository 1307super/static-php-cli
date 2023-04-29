<?php

declare(strict_types=1);

namespace SPC\builder\linux\library;

class libssh2 extends LinuxLibraryBase
{
    use \SPC\builder\unix\library\libssh2;

    public const NAME = 'libssh2';
}
