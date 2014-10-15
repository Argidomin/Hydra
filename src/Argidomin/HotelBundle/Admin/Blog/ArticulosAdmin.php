<?php

namespace Argidomin\HotelBundle\Admin\Blog;

use Argidomin\HotelBundle\Admin\Base\BaseAdmin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Sonata\AdminBundle\Validator\ErrorElement;

class ArticulosAdmin extends BaseAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);
        $formMapper
                ->setHelps(array(
                    'titulo' => 'Indique el titulo del articulo',
                    'cuerpo' => 'Indique el cuerpo del articulo',
                ));

    }

    public function validate(ErrorElement $errorElement, $objeto)
    {
        $errorElement
            ->with('titulo')
                ->assertLength(array('min' => 5, 'minMessage' => 'El nombre debe de contener más de 5 carácteres',
                    'max' => 100, 'maxMessage' => 'El nombre debe de contener menos de 100 caractéres'
                ))
                ->end()

        ->with('cuerpo')
                ->assertLength(array('min' => 5, 'minMessage' => 'El cuerpo debe de contener más de 5 carácteres'))
                ->end();
    }

}