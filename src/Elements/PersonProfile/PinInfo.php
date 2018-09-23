<?php
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 22.09.2018
 * Time: 17:53
 */

namespace Qiwi\Elements\PersonProfile;


use Qiwi\Elements\Base;

class PinInfo extends Base
{
    /**
     * Use pin code in the mobile application
     * @var bool
     */
    private $pinUsed;

    /**
     * @param bool $pinUsed
     * @return PinInfo
     */
    public function setPinUsed(bool $pinUsed) : self
    {
        $this->pinUsed = $pinUsed;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPinUsed() : bool
    {
        return (bool)$this->pinUsed;
    }
}