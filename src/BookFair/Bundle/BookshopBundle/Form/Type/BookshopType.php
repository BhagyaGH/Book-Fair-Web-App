<?php

namespace BookFair\Bundle\BookshopBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BookshopType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('bookshop_name', 'text')
                ->add('address', 'text')
                ->add('phone', 'text')
                ->add('stall_no', 'text')
                ->add('save', 'submit');
    }

    public function getName() {
        return 'bookshop';
    }

}
