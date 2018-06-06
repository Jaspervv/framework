<?php

namespace Themosis\Forms\Fields\Types;

use Themosis\Forms\Contracts\FieldTypeInterface;
use Themosis\Forms\Transformers\NumberToLocalizedStringTransformer;

class IntegerType extends BaseType
{
    /**
     * IntegerType field view.
     *
     * @var string
     */
    protected $view = 'types.number';

    /**
     * Setup the field.
     *
     * @return FieldTypeInterface
     */
    public function build(): FieldTypeInterface
    {
        $this->setTransformer(new NumberToLocalizedStringTransformer($this->form->getLocale()));

        return $this;
    }
}