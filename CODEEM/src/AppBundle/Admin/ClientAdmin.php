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

class ClientAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nom', 'text',array('label' => 'Nom'))
            ->add('prenom', 'text',array('label' => 'Prenom'))
            ->add('adresse', 'text',array('label' => 'Adresse'))
            ->add('ville', 'sonata_type_model', array('class' => 'AppBundle\Entity\Insee','property' => 'nomville'))
            ->add('mail', 'email',array('label' => 'Adresse mail'))
            ->add('telephone', 'text',array('label' => 'Téléphone'))
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

    ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nom',null,array('label' => 'Nom'))
            ->addIdentifier('prenom',null,array('label' => 'Prenom'))
            ->addIdentifier('adresse',null,array('label' => 'Adresse'))
            ->addIdentifier('ville', null, array(), 'entity', array('class' => 'AppBundle\Entity\Insee'))
            ->addIdentifier('mail',null,array('label' => 'Mail'))
            ->addIdentifier('telephone',null,array('label' => 'Téléphone') )
        ;
    }


    public function toString($object)
    {

        return $object instanceof Client
            ? $object->getNature()
            : 'Client'; // shown in the breadcrumb on the create view
    }


}