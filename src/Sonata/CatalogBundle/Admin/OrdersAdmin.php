<?php

namespace Sonata\CatalogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OrdersAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            
            ->add('status')
            ->add('orderedAt')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            
            ->add('status')
            ->add('customers')    
            ->add('orderedAt', 'date', array('widget' => 'single_text', 'attr' => array('class' => 'datepicker')))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            
            ->add('status','text',array('read_only' => true,'attr'=>array('value'=>'active')))
            ->add('customers','shtumi_ajax_autocomplete',array('entity_alias'=>'customers'))
            ->add('orderitems','sonata_type_collection', array('by_reference'=> false),array(
                'edit' => 'inline','inline' => 'table', 'sortable' => 'position','targetEntity' => 'Sonata/CatalogBundle/Entity/OrderItems'))
            ->add('orderedAt', 'date', array('widget' => 'single_text', 'attr' => array('class' => 'datepicker')))

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            
            ->add('status')
             ->add('customers')                
            ->add('orderedAt', 'date', array('widget' => 'single_text', 'attr' => array('class' => 'datepicker')))
        ;
    }
}
