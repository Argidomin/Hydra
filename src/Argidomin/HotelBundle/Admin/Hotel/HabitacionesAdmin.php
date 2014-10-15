<?php

namespace Argidomin\HotelBundle\Admin\Hotel;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\AdminBundle\Validator\ErrorElement;

use Argidomin\HotelBundle\Admin\Base\ProductosAdmin;


class HabitacionesAdmin extends ProductosAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);
        $formMapper
        
            ->add('superficieAproximada','number',['label' => 'Superficie de la habitación aproximada'])
            ->add('stock','text',['label' => 'Numero de habitaciones totales'])
            ->add('tipoCama','text', ['label' => 'Tipos de camas'])
            ->add('hotel')
            ->add('caracteristicasHabitaciones')
            ;

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

        parent::configureDatagridFilters($datagridMapper);
        $datagridMapper
            ->add('superficieAproximada')
            ->add('stock')
            ->add('tipoCama')
            ->add('hotel')

        ;
           

    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);
        $listMapper
            ->add('hotel')
            ;



    }

    public function validate(ErrorElement $errorElement, $objeto)
    {



    }

}