<?php

namespace ZnCore\Contract\Common\Exceptions;

DeprecateHelper::softThrow();

use Exception;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use ZnCore\Base\Helpers\DeprecateHelper;

/**
 * Class UnauthorizedException
 * @package ZnCore\Contract\Common\Exceptions
 * @deprecated 
 */
class UnauthorizedException extends AccessDeniedException
{

}
