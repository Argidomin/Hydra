<?php

namespace Argidomin\HotelBundle\Admin\Hotel;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Argidomin\HotelBundle\Admin\Base\PrincipalesAdmin;

class HotelesAdmin extends PrincipalesAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);

            $formMapper
                    ->add('titulo',null,['label'=>'Nombre del hotel'])
                    ->add('cuerpo',null,['label'=>'Descripcion del hotel'])
                    ->setHelps(array(
                        'titulo' => 'Introduzca el nombre del hotel',
                        'cuerpo' => 'Describa el hotel',
                    ))
                ->end()
                
                ->add('numeroEstrellas','text',['label'=>'Numero de Estrellas'])
                ->add('emailReservas')
                ->add('numeroHabitaciones','text',['label'=>'Numero de Habitaciones'])
                ->add('caracteristicasHotel')
            ;

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

        parent::configureDatagridFilters($datagridMapper);
        
        $datagridMapper
            ->add('numeroEstrellas',null, array(), 'choice', ['choices' => range(1,5)]
                );

    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);

        $listMapper
            ->add('numeroEstrellas',null,['label'=>'Numero de Estrellas'])
            ->add('emailReservas')
            ->add('numeroHabitaciones',null,['label'=>'Numero de Habitaciones'])
                ->add('caracteristicasHotel')
            
        ;

    }

}


