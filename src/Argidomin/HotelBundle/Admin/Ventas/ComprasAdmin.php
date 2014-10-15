<?php

namespace Argidomin\HotelBundle\Admin\Ventas;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\AdminBundle\Validator\ErrorElement;



class ComprasAdmin extends admin 
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('usuario')
            ->add('extras')
            ->add('editable')
            ->add('estado')
            ->add('pagada')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('idReserva')
            ->add('usuario')
            ->add('extras')
            ->add('editable')
            ->add('estado')
            ->add('pagada')
        ;
           

    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('idReserva')
            ->add('usuario')
            ->add('extras')
            ->add('editable')
            ->add('estado')
            ->add('pagada')
        ;

    }

    public function validate(ErrorElement $errorElement, $objeto)
    {



    }

}