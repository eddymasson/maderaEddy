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

class FournisseurAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('nom', 'text',array('label' => 'Nom du fournisseur'))
            ->add('mail', 'email',array('label' => 'Adresse e-mail','required' => false))
            ->add('adresse', 'text',array('label' => 'Adresse','required' => false))
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idfournisseur',null,array('label' => 'ID'))
            ->addIdentifier('nom',null,array('label' => 'Nom'))
            ->addIdentifier('mail',null,array('label' => 'Adresse e-mail'))
            ->addIdentifier('adresse',null,array('label' => 'Adresse'))
        ;
    }


    public function toString($object)
    {
        return $object instanceof Fournisseur
            ? $object->getTitle()
            : 'Fournisseur'; // shown in the breadcrumb on the create view
    }


}