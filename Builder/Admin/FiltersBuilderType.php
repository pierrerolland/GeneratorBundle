<?php

namespace Admingenerator\GeneratorBundle\Builder\Admin;

/**
 * This builder generates form for Filters
 * @author cedric Lombardot
 */
class FiltersBuilderType extends ListBuilder
{
    public function getOutputName()
    {
        return 'Form/Base'.$this->getBaseGeneratorName().'Type/FiltersType.php';
    }

    public function getTemplateName()
    {
        return 'FiltersBuilderType' . self::TWIG_EXTENSION;
    }
}
