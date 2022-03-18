<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Pages extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $pages = new FieldsBuilder('pages');

        $pages
            ->setLocation('post_type', '==', 'page')
            ->removeField('wysiwyg');

        $pages
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $pages->build();
    }
}
