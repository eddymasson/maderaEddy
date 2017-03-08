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

class InseeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('idinsee', 'text',array('label' => 'ID INSEE'))
            ->add('codepostal', 'text',array('label' => 'Code postal'))
            ->add('nomville', 'text',array('label' => 'Nom de la ville'))
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idinsee',null,array('label' => 'ID INSEE'))
            ->addIdentifier('codepostal',null,array('label' => 'Code postal'))
            ->addIdentifier('nomville',null,array('label' => 'Nom de la ville'))
        ;
    }


    public function toString($object)
    {
        return $object instanceof Insee
            ? $object->getTitle()
            : 'Ville'; // shown in the breadcrumb on the create view
    }


}