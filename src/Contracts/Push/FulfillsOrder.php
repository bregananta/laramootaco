<?php
namespace Bregananta\Laramootaco\Contracts\Push;

interface FulfillsOrder
{
    /**
     * Fullfils an order.
     * Should also execute any plugin specific triggers / hooks.
     * Plugin specific implementation.
     *
     * @param mixed $order
     *
     * @return bool
     */
    public function fulfill($order);
}
