<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 25/11/2016
 * Time: 16:34
 */
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class FamillecomposantAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('idfamillecomposant', 'integer',array('label' => 'ID'))
            ->add('nom', 'text',array('label' => 'Nom'))
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('idfamillecomposant',null,array('label' => 'ID'))
        ->addIdentifier('nom',null,array('label' => 'Nom'))
        ;
    }


    public function toString($object)
    {
        return $object instanceof Famillecomposant
            ? $object->getTitle()
            : 'Famille de composant'; // shown in the breadcrumb on the create view
    }


}