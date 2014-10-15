<?php

namespace Argidomin\HotelBundle\Admin\Usuarios;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle as mail;

class UsuariosAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('email')
            ->add('username')
            ->add('password')
            ->add('nombre')
            ->add('apellidos')
            ->add('telefono')
            ->add('direccion')
            ->add('ciudad')
            ->add('pais')
            ->add('empresa')
            ->add('dni')
            ->add(
                'roles',
                'choice',
                ['multiple' => false, 'choices' => ['ROLE_USUARIO'=>'Usuario', 'ROLE_ADMIN'=>'Administrador'
                    ]]
                );

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('nombre')
            ->add('dni')
            ->add('roles',null, array(), 'choice', array(
                    'choices' => array('ROLE_USUARIO'=>'Usuario', 'ROLE_ADMIN'=>'Administrador'))
                );
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('email')
            ->add('nombre')
            ->add('apellidos')
            ->add(
                'roles',
                'choice',
                array(
                    'multiple' => true,
                    'choices' => array('ROLE_USUARIO'=>'Usuario', 'ROLE_ADMIN'=>'Administrador', 'ROLE_USER'=>'Usuario'))
                );

        ;
    }

    public function create($object)
    {
        parent::create($object);

        $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('send@example.com')
        ->setTo('carlos.Argidomin@gmail.com')
        ->setBody('El melon es sano');

        $this->getConfigurationPool()->getContainer()->get('mailer')->send($message);
    }

}