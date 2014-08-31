<?php

namespace BookFair\Bundle\BookshopBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BookType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('isbn', 'text')
            ->add('title', 'text')
            ->add('price', 'number')
            ->add('category', 'text')
            ->add('description', 'textarea')
            ->add('author', 'text')
            ->add('save', 'submit');
    }

    public function getName() {
        return 'book';
    }

}
