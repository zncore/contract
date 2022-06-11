<?php

namespace ZnCore\Contract\User\Exceptions;

use Exception;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Не аутентифицированный пользователь
 */
class UnauthorizedException extends AccessDeniedException
{

}
