<?php

namespace App\PathResolver;

use ApiPlatform\Core\Operation\PathSegmentNameGeneratorInterface;
use Doctrine\Common\Inflector\Inflector;

/**
 * Generate a path name with an underscore separator according to a string and whether it's a collection or not.
 *
 * @author Antoine Bluchet <soyuka@gmail.com>
 */
final class IndonesiaUnderscorePathSegmentNameGenerator implements PathSegmentNameGeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getSegmentName(string $name, bool $collection = true): string
    {
        $name = Inflector::tableize($name);

        return $name;
    }
}
