<?php

namespace Drupal\proctors_test_module\Plugin\Field;

use Drupal\Core\Field\FieldItemList;
use Drupal\Core\TypedData\ComputedItemListTrait;

class ReadTimeField extends FieldItemList
{

    use ComputedItemListTrait;

    /**
     * Computes the field value.
     */
    protected function computeValue()
    {

    }
}
