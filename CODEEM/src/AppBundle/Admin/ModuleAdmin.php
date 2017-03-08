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

class ModuleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nature', 'text',array('label' => 'Nature'))
            ->add('gamme', 'sonata_type_model', array('class' => 'AppBundle\Entity\Gamme','property' => 'nom'))
            ->add('unite', 'text',array('label' => 'Unité'))
            ->add('epaisseur', 'number',array('label' => 'Epaisseur'))
            ->add('longueur', 'number',array('label' => 'Longueur'))
            ->add('angleentrant', 'number',array('label' => 'Angle entrant'))
            ->add('anglesortant', 'number',array('label' => 'Angle sortant'))
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

    ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idmodule',null,array('label' => 'ID'))
            ->addIdentifier('nature',null,array('label' => 'Nature'))
            ->addIdentifier('gamme', null, array(), 'entity', array('class' => 'AppBundle\Entity\Gamme'))
            ->addIdentifier('unite',null,array('label' => 'Unite'))
            ->addIdentifier('epaisseur',null,array('label' => 'Epaisseur'))
            ->addIdentifier('longueur',null,array('label' => 'Longueur'))
            ->addIdentifier('angleentrant',null,array('label' => 'Angle entrant'))
            ->addIdentifier('anglesortant',null,array('label' => 'Angle sortant'))
        ;
    }


    public function toString($object)
    {

        return $object instanceof Module
            ? $object->getNature()
            : 'Module'; // shown in the breadcrumb on the create view
    }


}