<?php

namespace Sonata\CatalogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OrderItemsAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            
            ->add('price')
            ->add('quantity')
            ->add('total')
               
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
           
           ->add('quantity')
           ->add('Product','shtumi_ajax_autocomplete',array('entity_alias'=>'product'))
           ->add('price','entity',array('class' => 'SonataCatalogBundle:Product','property'=> 'price'))
           ->add('total')
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
          //  ->add('customers','entity',array('class' => 'SonataCatalogBundle:Customers','property'=> 'firstname'))
           // ->add('Orders','sonata_type_collection',array('btn_add'=>'OrderNow'))
           // ->add('Product','genemu_jqueryautocompleter_entity',array('class' => 'SonataCatalogBundle:Product','property'=> 'name'))
            ->add('Product','shtumi_ajax_autocomplete',array('entity_alias'=>'product'))                
          //  ->add('price','shtumi_ajax_onchange',array('entity_alias'=>'product'))
            ->add('price','text',array('attr'=> array('class' => 'price')))
            ->add('quantity','text',array('attr' => array('onchange' => 'clickme(this.id)')))
            ->add('total','text',array('attr'=> array('class' => 'total')))
        ;
    
        
        
        
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
          //  ->add('customers','entity',array('class' => 'SonataCatalogBundle:Customers','property'=> 'firstname'))
            ->add('Product','entity',array('class' => 'SonataCatalogBundle:Product','property'=> 'name'))                    
            ->add('price')
            ->add('quantity')
            ->add('total')
        ;
    }
}
