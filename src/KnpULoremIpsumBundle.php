<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 22/01/2020
 * Time: 21:47
 */

namespace KnpU\LoremIpsumBundle;


use KnpU\LoremIpsumBundle\DependencyInjection\KnpULoremIpsumExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class KnpULoremIpsumBundle extends Bundle
{
    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new KnpULoremIpsumExtension();
        }

        return $this->extension;
    }
}