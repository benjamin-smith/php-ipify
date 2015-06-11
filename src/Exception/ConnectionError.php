<?php

namespace Ipify\Exception;

/**
 * The request failed because it wasn't able to reach the ipify service. This
 * is most likely due to a networking error of some sort.
 */
class ConnectionError extends \Exception {
}
