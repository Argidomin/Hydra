<?php

namespace Argidomin\HotelBundle\Admin\Base;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\AdminBundle\Validator\ErrorElement;

use Argidomin\HotelBundle\Admin\Base\BaseAdmin;

class PrincipalesAdmin extends BaseAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);
        $formMapper            
            ->add('cifEmpresa','text')
            ->add('nombreResponsable', 'text', ['label' =>'Responsable'])
            ->add('emailContacto','email')
            ->add('ciudad','text')
            ->add('codigoPostal','text')
            ->add('provincia','text')
            ->add('pais','text')
            ->add('telefono','text')
            ->add('fax','text')    
            ->end()    
            ;

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

        parent::configureDatagridFilters($datagridMapper);
        $datagridMapper            
            ->add('cifEmpresa')
            ->add('nombreResponsable', null, ['label' =>'Responsable'])
            ->add('emailContacto')
            ->add('ciudad')
            ->add('codigoPostal')
            ->add('provincia')
            ->add('pais')
            ->add('telefono')
            ->add('fax')
            ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);
        $listMapper
            ->add('cifEmpresa')
            ->add('nombreResponsable', null, ['label' =>'Responsable'])
            ->add('emailContacto')
            ->add('ciudad')
            ->add('codigoPostal')
            ->add('provincia')
            ->add('pais')
            ->add('telefono')
            ->add('fax')
            ;


    }

    public function validate(ErrorElement $errorElement, $objeto)
    {
        /*
        parent::validate($errorElement,$objeto);
        
        $errorElement
            ->with('cifEmpresa')
                ->assertLength(['min' => 9, 'minMessage' => 'El cif debe de contener más de 9 carácteres'])
                ->end()

            ->with('nombreResponsable')
                ->assertNotBlank(['message' => 'Debe de introducir un responsable'])
                ->end()

            ->with('emailContacto')
                ->assertEmail([ 'message' => 'Debe escribir un mail valido'])
                ->end()

            ->with('ciudad')
                ->assertLength(array('min' => 3, 'minMessage' => 'El nombre de la ciudad debe de contener más de 5 carácteres'))
                ->end()

            ->with('provincia')
                ->assertLength(array('min' => 3, 'minMessage' => 'El nombre de la provincia debe de contener más de 5 carácteres'))
                ->end()

            ->with('pais')
                ->assertLength(array('min' => 3, 'minMessage' => 'El nombre del país debe de contener más de 5 carácteres'))
                ->end()

            ;*/

    }

}