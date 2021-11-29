<?php

namespace ZnCore\Contract\User\Exceptions;

use Exception;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UnauthorizedException extends AccessDeniedException
{

}
