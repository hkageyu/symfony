<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license infieldation, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Renderer\Plugin;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Renderer\FormRendererInterface;

class ParentNamePlugin implements FormRendererPluginInterface
{
    public function setUp(FormInterface $form, FormRendererInterface $renderer)
    {
        if ($form->hasParent()) {
            $parentRenderer = $form->getParent()->getRenderer();
            $renderer->setVar('name', $parentRenderer->getVar('name'));
        }
    }
}