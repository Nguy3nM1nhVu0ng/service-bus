<?php
/**
 * This file is part of the prooph/service-bus.
 * (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\ServiceBus\Plugin\InvokeStrategy;

class HandleCommandStrategy extends AbstractInvokeStrategy
{
    /**
     * @param mixed $handler
     * @param mixed $message
     */
    public function invoke($handler, $message): void
    {
        $handler->handle($message);
    }
}
