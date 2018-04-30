<?php
namespace Bregananta\Laramootaco\Contracts\Push;


interface FindsDuplicate
{
    public function findDupes(array &$mootaInflows, array &$orders);
}
