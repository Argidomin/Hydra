<?php

namespace Argidomin\HotelBundle\Admin\Base;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\AdminBundle\Validator\ErrorElement;

use Argidomin\HotelBundle\Admin\Base\BaseAdmin;

class ProductosAdmin extends BaseAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);
        $formMapper            
                    ->add('titulo','text',['label'=>'Nombre del producto '])
                    ->add('cuerpo',null,['label'=>'Descripcion'])
                    ->add('precio','text')
                    ->add('stock', 'text',['required' =>false])

                ->end() 

            ;

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

        parent::configureDatagridFilters($datagridMapper);
        $datagridMapper
            ->add('precio', null)
            ;

    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);
        $listMapper
            ->add('precio','text')
            ->add('stock','number')
            ->remove('cuerpo')
            ;



    }

    public function validate(ErrorElement $errorElement, $objeto)
    {
        parent::validate($errorElement,$objeto);

        $errorElement
            ->with('precio')
                ->assertType(['type'=>'integer', 'message'=>"No se ha introducido un numero"])
                ->end()
            
            ->with('stock')
                ->assertType(['type'=>'integer', 'message'=>"No se ha introducido un numero"])
                ->end()
        ;

    }

}