<?php

namespace Argidomin\HotelBundle\Admin\Base;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\AdminBundle\Validator\ErrorElement;

use Argidomin\HotelBundle\Admin\Base\BaseAdmin;

class CaracteristicasAdmin extends BaseAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);
        $formMapper            
                    ->add('titulo',null,['label'=>'Nombre de la caracteristica'])
                    ->add('cuerpo',null,['label'=>'Descripcion'])
                ->end() 
            ;

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

        parent::configureDatagridFilters($datagridMapper);
           

    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);



    }

    public function validate(ErrorElement $errorElement, $objeto)
    {
        parent::validate($errorElement,$objeto);


    }

}