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

class GammeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('nom', 'text',array('label' => 'Nom de la gamme'))
            ->add('finitionexterieur', 'text',array('label' => 'Finition extérieur de la gamme'))
            ->add('typeisolant', 'text',array('label' => 'Isolant de la gamme'))
            ->add('couverture', 'text',array('label' => 'Couverture de la gamme'))
            ->add('qualitehuisserie', 'text',array('label' => 'Qualité d\'huisserie de la gamme'))
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

    ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idgamme',null,array('label' => 'ID'))
            ->addIdentifier('nom',null,array('label' => 'Nom'))
            ->add('finitionexterieur',null,array('label' => 'Finition Extérieur'))
            ->add('typeisolant',null,array('label' => 'Isolant'))
            ->add('couverture',null,array('label' => 'Couverture'))
            ->add('qualitehuisserie',null,array('label' => 'Huisserie'))
        ;
    }


    public function toString($object)
    {


        return $object instanceof Gamme
            ? $object->getNom()
            : 'Gamme'; // shown in the breadcrumb on the create view
    }


}