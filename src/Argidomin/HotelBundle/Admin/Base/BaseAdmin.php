<?php

namespace Argidomin\HotelBundle\Admin\Base;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

abstract class BaseAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('titulo', 'text',['label' => 'Nombre'])
            ->add('estado','checkbox',['required' => false])
            ->add('cuerpo', 'textarea')
            ->end()
            ;


    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titulo',null,['label' => 'Nombre'])
            ->add('fechaCreacion',null,['format' => 'd/m/y h:m', 'label' =>'Fecha de creación'])
            ->add('fechaActualizado',null,['format' => 'd/m/y h:m', 'label' =>'Fecha de modificacion'])
            ->add('estado')
            ;

    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('estado','boolean')
            ->addIdentifier('titulo',null,['label' => 'Nombre'])
            ->add('fechaCreacion','datetime',['format' => 'd/m/y h:m', 'label' =>'Fecha de creación'])
            ->add('fechaActualizado','datetime',['format' => 'd/m/y h:m', 'label' =>'Fecha de modificacion'])

            ;

    }

}