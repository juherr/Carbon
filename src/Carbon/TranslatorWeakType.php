<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon;

class Translator extends AbstractTranslator
{
    /**
     * Returns the translation.
     *
     * @return string
     */
    public function trans(?string $id, array $parameters = [], ?string $domain = null, ?string $locale = null)
    {
        return parent::trans($id, $parameters, $domain, $locale);
    }
}
